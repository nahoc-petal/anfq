( function( $ ) {	
	function Carousel( $base ) {
		this.$base = $base;
		this.carouselItems = -1;

		this.maxIndex = -1;
		this.minIndex = 0;

		this.canMove = true;

		this.swipeX = 0, this.swipeY = 0;

		this.init = function() {
			/* Count how many carousel objects we have */
			var i = this.minIndex;
			do {
				if ( ! this.getSlideAtIndex(i).length ) {
					this.maxIndex = i - 1;
				}

				i++;
			} while ( this.maxIndex == -1 && i < 100 )

			/* Build the previous / next button */
			this.$base.append(	'<div class="control prev">' +
								'<button class="button-prev"><span class="screen-reader-text">Previous Image</span></button>' +
								'</div>' +
								'<div class="control next">' +
								'<button class="button-next"><span class="screen-reader-text">Next Image</span></button>' +
								'</div">');

			/* Bind our events to the prev/next buttons */
			this.$base.find('.button-prev').bind( 'click', { carousel: this }, function( event ) {
				event.data.carousel.move( -1 );
			} );

			this.$base.find('.button-next').bind( 'click', { carousel: this }, function( event ) {
				event.data.carousel.move(  1 );
			} );

			this.$base.on( 'touchstart', { carousel: this }, function( event ) { 
				event.data.carousel.touchStart(event);
			} );

			this.$base.on( 'touchend', { carousel: this }, function( event ) { 
				if ( event.data.carousel.touchEnd(event) ) {
					event.preventDefault();
				}
			} );

			/* Build the skip buttons on the bottom */
			var html = '<div class="skip-links">';
			for ( var i = this.getMinIndex(); i <= this.getMaxIndex(); i++ ) {
				var active = "";
				if ( this.getActiveSlideIndex() == i ) {
					active = "active";
				}

				html += '<button class="skip ' + i + ' ' + active + '" data-index="' + i + '"><span class="screen-reader-text">Skip to Image ' + i + '</span></button>';
			}
			html += '</div>';

			this.$base.append(html);

			/* Bind events to the skip buttons */
			this.$base.find( '.skip-links button.skip' ).bind( 'click', { carousel: this }, function( event ) {
				event.data.carousel.set( $(this).data('index') );
			})
		}

		this.move = function( dir ) {
			if ( !this.canMove ) { return false; }

			var activeImage = this.getActiveSlide();
			if ( !activeImage.length ) { return false; }

			var activeIndex = this.getSlideIndex(activeImage);
			if ( activeIndex == -1 ) { return false; }

			this.canMove = false;
			setTimeout( function() { this.resetAnimations() }.bind(this), moveWait );

			return this.set( activeIndex + dir );
		}

		this.resetAnimations = function() {
			this.canMove = true; 
		}

		this.set = function( newIndex ) {
			/* Get our current image element and it's index */
			var $activeImage = this.getActiveSlide();
			if ( !$activeImage.length ) { return false; }

			var prevIndex = this.getSlideIndex($activeImage);
			if ( prevIndex == -1 ) { return false; }

			/* Check for index overflows and wrap around*/
			var animDir = newIndex - prevIndex;

			if ( newIndex < this.getMinIndex() ) {
				newIndex = this.getMaxIndex();
			} else if ( newIndex > this.getMaxIndex() ) {
				newIndex = this.getMinIndex();
			}

			var $newImage = this.getSlideAtIndex( newIndex );

			if ( $newImage.length ) {
				/* update the image classes */
				$activeImage.removeClass( 'active' );
				$newImage.addClass( 'active' );

				/* update the skip links classes */
				var $activeLink = this.$base.find('.skip-links button.' + prevIndex + '.active').removeClass( 'active' );
				var $newLink = this.$base.find('.skip-links button.' + newIndex).addClass( 'active' );


				this.$base.find('.slides').css( { "transform": "translateX(" + (this.getSlideIndex($newImage) * -100) + "%)" } );

				/* Reset queue advancement */
				queueAdvance();

				return true;
			}

			return false;
		}

		this.getSlideIndex = function($image) {
			if ( !$image.length ) { return -1; }

			return $image.data( 'index' );
		}

		this.getSlideAtIndex = function(index) {
			return this.$base.find( '.slides a.' + index );
		}

		this.getActiveSlideIndex = function() {
			var $active = this.getActiveSlide();

			if ( $active.length ) {
				return this.getSlideIndex( $active );
			}

			return null;
		}

		this.getActiveSlide = function() {
			return this.$base.find( '.slides a.active' );
		}

		this.getMinIndex = function() {
			return this.minIndex;
		}

		this.getMaxIndex = function() {
			return this.maxIndex;
		}

		this.touchStart = function( event ) {
			this.swipeX = event.originalEvent.changedTouches[0].clientX;
			this.swipeY = event.originalEvent.changedTouches[0].clientY;
		}

		this.touchEnd = function( event ) {
			var relX = event.originalEvent.changedTouches[0].clientX - this.swipeX;
			var relY = event.originalEvent.changedTouches[0].clientY - this.swipeY;

			if ( Math.abs( relY ) < swipeYThreshold ) {
				if ( relX > swipeXThreshold ) { 
					this.move( -1 );
					return true;
				} else if ( relX < -swipeXThreshold ) {
					this.move( 1 );
					return true;
				}
			}
		}

		return this;
	}


	carouselArray = new Array();

	/* ID for the timer */
	advanceID = 0;

	/* Delay in ms before naturally progressing the carousels */
	advanceDelay = 5000;

	/* Match this with the CSS animations duration */
	moveWait = 600;

	swipeXThreshold = 75;
	swipeYThreshold = 35

	function init() {
		$( '.carousel' ).each( function( index, obj ) {
			var carousel = new Carousel( $(this) );
			carousel.init();

			carouselArray.push( carousel );
		} );

		queueAdvance();
	}

	function advance() {
		for (var i = 0; i < carouselArray.length; i++) {
			carouselArray[i].move( 1 );
		}

		queueAdvance();
	}

	function queueAdvance() {
		clearTimeout(advanceID);
		advanceID = setTimeout( function() {
					advance();
				}, advanceDelay );
	}


	$( document ).ready( function() {
		$( window ).on( 'load', init );
	} );
} ) ( jQuery );