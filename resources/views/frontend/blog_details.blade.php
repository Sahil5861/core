@extends('layouts.frontend_default')
@section('title', 'Blog Details')
@section('content')
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

		<section class="section-padding--bottom section-padding--top">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
					@foreach($blog as $blogsData)			
						<div class="blog-details__image">
								<img src="{{ asset('images/blogs/' . $blogsData->image) }}" alt="" style="box-shadow: 5px 5px 10px rgba(10, 10, 10, 1.3);">
							</div>
							<!-- /.blog-details__image -->
							<div class="blog-card-one__meta">
								<div class="blog-card-one__date">
									<i class="fa fa-calendar-alt" aria-hidden="true"></i>
									{{ $blogsData->created_at->format('F d, Y') }}

								</div><!-- /.blog-card-one__date -->
								<a href="#" class="blog-card-one__category">{{$blogsData->title}}</a>
								<!-- /.blog-card-one__category -->
							</div><!-- /.blog-card-one__meta -->
							<!-- <h3 class="blog-card-one__title blog-details__title">{{$blogsData->title}}</h3> -->
								<div class="blog-details__content mt-2">
										{!!$blogsData->description!!}
								</div>
								<!-- /.blog-details__content -->
								<div class="blog-details__meta">
									<div class="blog-details__tags">
										<span>Tags</span>
										@foreach(explode(',', $blogsData->tags) as $tag)
											<a href="#">{{ $tag }}</a>
										@endforeach
										<!-- <a href="#">Development</a> -->
										<!-- <a href="#">Designing</a> -->
									</div><!-- /.blog-details__tags -->
									<ul class="blog-details__share">
										<li><a target="_blank" id="twitter-link" href="https://twitter.com/intent/tweet?text="><i class="fab fa-twitter"></i></a></li>
										<li><a id="facebook-link" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank"><i class="fab fa-facebook"></i></a></li>
										<li><a id="pinterest-link" href="https://www.pinterest.com/pin/create/button/?url=" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									</ul><!-- /.blog-details__share -->
								</div>
									<!-- /.blog-details__meta -->
									<div class="author-one">
										<div class="author-one__image">
											<!-- <img src="../frontend/assets/images/blog/author-1-1.jpg" alt=""> -->
											<img src="{{ asset('images/blogs/' . $blogsData->author_img) }}" alt="" width="130">
										</div><!-- /.author-one__image -->
										<div class="author-one__content">
											<h3 class="author-one__title">{{$blogsData->name}}</h3><!-- /.author-one__title -->
											<p class="author-one__text">{{$blogsData->content}}</p>
											<!-- /.author-one__text -->
										</div><!-- /.author-one__content -->
									</div><!-- /.author-one -->
								@endforeach		
						<div class="comments-one">
							<!-- <h3 class="comments-one__title"></h3>
							<div class="comments-one__item">
								<div class="comments-one__item__image">
									<img src="../frontend/assets/images/blog/comment-1-1.png" alt="">
								</div>
								<div class="comments-one__item__content">
									<h3 class="comments-one__item__title"></h3>
									<p class="comments-one__item__text">It has survived not only five centuries, but
										also the leap into electronic typesetting simply fee text aunchanged. It was
										popularised in the sheets containing lorem ipsum is simply free text.</p>
									<a href="#" class="thm-btn comments-one__item__btn"><span>Reply</span></a>
								</div>
							</div> -->
						</div>
						<div class="comment-form">
							<h3 class="comment-form__title">Leave a Comment</h3><!-- /.comment-form__title -->
							<form action="" class="contact-one__form contact-form-validated comment-form__form">
								<div class="row ">
									<div class="col-lg-6 col-md-12">
										<input type="text" placeholder="Your name" name="name" id="name">
									</div><!-- /.col-lg-6 col-md-12 -->
									<div class="col-lg-6 col-md-12">
										<input type="email" placeholder="Email address" name="email" id="email">
									</div><!-- /.col-lg-6 col-md-12 -->
									<div class="col-lg-12 col-md-12">
										<textarea name="message" placeholder="Write message" id="message"></textarea>
									</div><!-- /.col-lg-6 col-md-12 -->
									<div class="col-md-12">
										<button class="thm-btn contact-one__btn" id="submitCommentBtn" type="button"><span>Submit
												comment</span></button>
									</div><!-- /.col-md-12 -->
								</div><!-- /.row -->
							</form><!-- /.contact-one__form -->

						</div><!-- /.comment-form -->
					</div>
					<!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="sidebar">
							{{-- <div class="sidebar__item sidebar__item--search">
								<form action="{{route('search_data')}}" class="sidebar__search" method="post">
									@csrf
									<label for="search" class="sr-only">search here</label>
									<input type="text" placeholder="Search Here" name="search"/>
									<button type="submit" aria-label="search submit" class="thm-btn">
										<span><i class="icon-magnifying-glass"></i></span>
									</button>
								</form>
							</div> --}}
							<!-- /.sidebar__item -->
							<div class="sidebar__item sidebar__item--posts">
								<h3 class="sidebar__title">Latest Posts</h3><!-- /.sidebar__title -->
								<ul class="sidebar__posts">
									@foreach($blogData as $data)
									<li>
										<div class="sidebar__posts__image">
											<!-- <img src="../frontend/assets/images/blog/blog-s-1-1.png" alt=""> -->
											<img src="{{ asset('images/blogs/' . $data->image) }}" alt="" style="width:100px">
										</div><!-- /.sidebar__posts__image -->
										<div class="sidebar__posts__content">
											<div class="sidebar__posts__date">
												<i class="fa fa-comments"></i>
												2 Comments
											</div><!-- /.sidebar__posts__date -->
											<h3 class="sidebar__posts__title"><a href="#">{{$data->title}}</a></h3><!-- /.sidebar__posts__title -->
										</div><!-- /.sidebar__posts__content -->
									</li>
									@endforeach
								</ul><!-- /.sidebar__posts -->
							</div><!-- /.sidebar__item -->
							<div class="sidebar__item sidebar__item--category">
								<h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
								<ul class="sidebar__category">
									<li>
										<a href="#">Web Development</a>
									</li>
									<li>
										<a href="#">Digital Marketing</a>
									</li>
									<li>
										<a href="#">Technology</a>
									</li>
									<li>
										<a href="#">Data Analysis</a>
									</li>
									<li>
										<a href="#">Cyber Security</a>
									</li>
								</ul><!-- /.sidebar__category -->
							</div><!-- /.sidebar__item -->
							
							<div class="sidebar__item sidebar__item--tags">
								<h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
								<div class="sidebar__tags">
									<!-- <a href="#">Development</a>
									<a href="#">Designing</a>
									<a href="#">Business</a>
									<a href="#">Marketing</a>
									<a href="#">technology</a> -->
									@foreach(explode(',', $blogsData->tags) as $tag)
										<a href="#">{{ $tag }}</a>
									@endforeach
								</div><!-- /.sidebar__tags -->
							</div><!-- /.sidebar__item -->
						</div><!-- /.sidebar -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>		
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