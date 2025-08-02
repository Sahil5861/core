@extends('layouts.frontend_default')
@section('title', 'Blog Details')
<style>
    .owl-carousel .item {
            padding: 5px;
        }

        .card {
            background: #fff;
            border-radius: 10px;            
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            color: #000;
            transition: 0.3s ease-in-out;
            padding: 20px;
            margin: 0;
        }

        .card-content {
            padding: 15px 0;
        }

        h3 {
            margin: 10px 0 5px;
        }

        p {
            color: inherit;
        }

        .details {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            font-weight: bold;
            /* color: #007bff; */
            color: #007bff;
        }

        .service-crausel .owl-item.center .card {
            background: url('images/map-vector-bg.png') center center no-repeat;
            background-size: cover;
            color: #fff;
            background-color: #007bff;
        }

        .service-crausel .owl-item.center .details {
            color: #fff;
        }

        .service-crausel .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            /* background: rgba(0, 0, 0, 0.5); */
            background-color: #007bff;
            width: 60px; height: 60px;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            z-index: 10;
            display: block !important;
        }


        .project-crausel .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            /* background-color: #007bff; */
            /* width: 60px; height: 60px; */
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 50%;
            z-index: 10;
            display: block !important;
        }

        .service-crausel .owl-nav .owl-prev {
            left: -66px;
            top: 174px;
        }

        .service-crausel .owl-nav .owl-next {
            right: -66px;
            top: 174px;
        }

        .oject-crausel .owl-nav .owl-prev {
            left: 10px;            
        }

        .oject-crausel .owl-nav .owl-next {
            right: 10px;            
        }

        .sevice-card .card-content{
            text-align: left;
            min-height: 13rem;
        }

        .testimonial-card {
            position: relative;
            padding-bottom: 50px; /* Space for image */
            min-height: 20rem;
        }

        .rating i {
            font-size: 1.2rem;
        }        
        .owl-carousel .testimonial-card .testimonial-img{
            width: 50px !important; /* Adjust size */
            height: 50px !important;
            border-radius: 50% !important;
            object-fit: cover;
            margin: 10px;
        }


        

    
    /* .owl-prev i, .owl-next i{
        line-height: 4;
    } */
</style>

<style>
    /* section */
    .cta-section {

    position: relative;
    height: 20rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url("../images/laptop-2620118_1280.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Keeps background fixed */
    color: white;
    overflow: hidden;
    }

    /* Black Overlay */
    .cta-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6); /* Adjust opacity (0.6) as needed */
        z-index: 1;
    }

    .cta-content {
        max-width: 800px;
        margin: auto;
        text-align: center;        
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        z-index: 2; /* Ensures content stays above overlay */
    }

    .cta-title {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .thm-btn {
        display: inline-block;
        background-color: #ff6600;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.3s;
    }

    .thm-btn:hover {
        background-color: #cc5200;
    }

    .ceo-badge {
            position: absolute;
            bottom: 15px;
            left: -15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 10px;
            width: 200px;
            text-align: center;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all .3s ease-out;
            cursor: pointer;
            user-select: none;
        }
        .ceo-badge a {
            color: #007bff;
            text-decoration: none;
        }
    .ceo-badge:hover{
        transform: translateX(20%);
    }
    .bg-video{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(107, 95, 175, 0.5); /* #6B5FAF with 50% opacity */
        z-index: 1;
    }
        

</style>
@section('section')

<div class="breadcrumb-murtes" style="background: url(../images/about_us.png)">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="{{asset('images/service-list.mp4')}}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="breadcrumb-content">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- about begin -->
{{-- <div class="about-page-about">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-10">
                <div class="part-text">
                    <h2>Preparing for your
                            success, we provide
                            truly prominent IT
                            solutions.</h2>
                    <p>We are more than just an IT company; we are your strategic technology partner, committed to empowering your business with innovative and advanced solutions. Driven by a passion for excellence and a dedication to continuous innovation, we strive to transform your operations and ensure you remain at the forefront of today’s rapidly evolving digital landscape.</p>

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('images/ceo.jpg')}}" alt="Saddam Husain" width="150">
                        </div>
                        <div class="col-lg-6" style="display: flex; flex-direction:column; justify-content:center;">
                            <h5>Saddam Husain</h5>
                            <h6>Founder CEO</h6>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="part-img">
                    <img class="img-full" src="{{asset('images/company.png')}}" alt="">
                </div>
            </div>            
        </div>
    </div>
</div> --}}
	@include('includes.wave')
	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>
	<div class="page-wrapper">
		<div class="page-header">
			<div class="page-header__bg"
				style="background-image: url(../frontend/assets/images/background/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Blog</li>
				</ul>
				<h2 class="page-header__title">Blog Details</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->
	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	function displayComments() {
	// Get the total number of comments from localStorage
	const commentsCount = parseInt(localStorage.getItem('commentsCount'));
	$('.comments-one').prepend(`<h3 class="comments-one__title">Total Comments: ${commentsCount}</h3>`);
	// Loop through each comment index and retrieve the name and message
	for (let i = 1; i <= commentsCount; i++) {
		const name = localStorage.getItem(`comment${i}_name`);
		const message = localStorage.getItem(`comment${i}_message`);
		// Create HTML elements for the comment
		const commentItem = $('<div class="comments-one__item"></div>');
		const commentImage = $('<div class="comments-one__item__image"></div>').append('<img src="../frontend/assets/images/blog/comment-1-1.png" alt="">');
		const commentContent = $('<div class="comments-one__item__content"></div>');
		const commentTitle = $('<h3 class="comments-one__item__title"></h3>').text(name);
		const commentText = $('<p class="comments-one__item__text"></p>').text(message);
		// const replyLink = $('<a href="#" class="thm-btn comments-one__item__btn"><span>Reply</span></a>');

		// Append the comment elements to the comment item
		commentContent.append(commentTitle, commentText);
		commentItem.append(commentImage, commentContent);

		// Append the comment item to the comments container
		$('.comments-one').append(commentItem);
	}
	}
//   $(document).ready(function() {
//     $('#submitCommentBtn').click(function() {
//       const name = $('#name').val();
//       const email = $('#email').val();
//       const message = $('#message').val();
//       const commentsCount = localStorage.getItem('commentsCount');
//       const newCommentIndex = commentsCount ? parseInt(commentsCount) + 1 : 1;

//       localStorage.setItem(`comment${newCommentIndex}_name`, name);
//       localStorage.setItem(`comment${newCommentIndex}_message`, message);
//       localStorage.setItem('commentsCount', newCommentIndex);
// 	  $('#name').val('');
//     $('#email').val('');
//     $('#message').val('');
// 	displayComments();
//   });
//   displayComments();
// });
$(document).ready(function () {
  function getCurrentBlogTitle() {
    return $(".blog-card-one__category").text().trim(); // Assumes this is the element displaying the blog title
  }

  $('#submitCommentBtn').click(function () {
    const name = $('#name').val();
    const email = $('#email').val();
    const message = $('#message').val();
    const currentBlogTitle = getCurrentBlogTitle();

    const comments = JSON.parse(localStorage.getItem(currentBlogTitle)) || [];

    comments.push({ name, email, message });

    localStorage.setItem(currentBlogTitle, JSON.stringify(comments));

    $('#name').val('');
    $('#email').val('');
    $('#message').val('');

    displayComments();
  });

function displayComments() {
  const currentBlogTitle = getCurrentBlogTitle();
  const comments = JSON.parse(localStorage.getItem(currentBlogTitle)) || [];
  const totalComments = comments.length;

  $('.comments-one__item, .comments-heading').remove();

  const commentsContainer = $('.comments-one');
  commentsContainer.prepend(`
    <h3 class="comments-heading" style="color:#000;">Comments (${totalComments})</h3>
  `);

  comments.forEach((comment, index) => {
    const commentHtml = `
      <div class="comments-one__item">
        <div class="comments-one__item__image">
          <!-- You can add the commenter's image here if needed -->
        </div>
        <div class="comments-one__item__content">
          <h3 class="comments-one__item__title">Comment #${index + 1}: ${comment.name}</h3>
          <p class="comments-one__item__text" style="color:#000;">${comment.message}</p>
          <!-- You can add a "Reply" button here if needed -->
        </div>
      </div>
    `;
    commentsContainer.append(commentHtml);
  });
}

  // Initial display of comments
  displayComments();
});
</script>
<script>
    // Get the current URL
    var currentUrl = window.location.href;

    // Encode the URL for use in the query parameter
    var encodedUrl = (currentUrl);

    // Update the href attribute of the Twitter intent link
    var twitterLink = document.getElementById('twitter-link');
    twitterLink.href += encodedUrl;
</script>
<script>
    // Get the blog link
    var currentUrl = window.location.href;
    // Encode the blog link for use in the query parameter
    // var encodedLink = encodeURIComponent(blogLink);

    // Update the href attribute of the Facebook share link
    var facebookLink = document.getElementById('facebook-link');
	facebookLink.href += currentUrl;
</script>

<script>
    // Get the current page URL
    var currentUrl = window.location.href;
    var pinterestLink = document.getElementById('pinterest-link');
    pinterestLink.href+=currentUrl;
</script>
@if(session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
@endsection