<!DOCTYPE html>
<html lang="en">
<head>
	<?php $title="blog-detail";
	 include "inc-head.php"?>
</head>
<body>

	<!-- Start preloader -->
		<div id="preloader">
			<label>Loading</label>
		</div>
	<!-- End preloader -->
    <?php include "inc-header.php"?> 
	
	<!--page-banner-->
	<section class="page-banner" style="background: #121619 url(images/blog-5.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">Blog</h1>
						<ul>
							<li><a href="index.php" class="page-name">Home</a></li>
							<li><a href="blog-leftside.php" class="page-name">Blog</a></li>
							<li>Blog Detail</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-detail pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="blog-box">
						<div class="blog-img"><img src="images/blog-2.jpg" alt="blog"></div>
						<ul>
							<li>by John Doe</li>
							<li><a href="#">0 comments</a></li>
						</ul>
						<h2>Possession so comparison inquietude he conviction</h2>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handfulThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
						<blockquote>
							<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
						</blockquote>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handfulThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>

						<ol>
							<li>Tags:</li>
							<li><a href="#">Planing</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Consulting</a></li>
						</ol>
						<div class="teg-desc">
							<div class="tag-img"><img src="images/tag.jpg" alt="tag"></div>
							<div class="tag-det">
								<label class="det-title">John doe</label>
								<p class="det-description">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,</p>
							</div>
						</div>
						<div class="comments">
							<h2 class="title-com">comments </h2>
							<div class="comments-box">
								<div class="comment-img"><img src="images/comment-1.jpg" alt="img"></div>
								<div class="comment-text">
									<div class="details-com">
										<label class="name-com">John doe</label>
										<p class="desc-com">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
									</div>
									<div class="button-comme">
										<a href="#" class="reply-com"><i class="fa fa-reply" aria-hidden="true"></i> reply</a>
									</div>
								</div>
							</div>
							<div class="comments-box">
								<div class="comment-img"><img src="images/comment-2.jpg" alt="img"></div>
								<div class="comment-text">
									<div class="details-com">
										<label class="name-com">John doe</label>
										<p class="desc-com">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
									</div>
									<div class="button-comme">
										<a href="#" class="reply-com"><i class="fa fa-reply" aria-hidden="true"></i> reply</a>
									</div>
								</div>
							</div>
							<div class="comments-box">
								<div class="comment-img"><img src="images/comment-3.jpg" alt="img"></div>
								<div class="comment-text">
									<div class="details-com">
										<label class="name-com">John doe</label>
										<p class="desc-com">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
									</div>
									<div class="button-comme">
										<a href="#" class="reply-com"><i class="fa fa-reply" aria-hidden="true"></i> reply</a>
									</div>
								</div>
							</div>
						</div>
						<div class="leave">
							<h2 class="title-com">Leave Your Comments </h2>
							<form>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
										    <input type="text" name="name" class="form-control" placeholder="Name" required>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
										    <input type="text" name="email" class="form-control"  placeholder="Email" required>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
										    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
										    <textarea class="form-control" placeholder="Write Your Coment"></textarea>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<input type="submit" name="submit" value="post comment" class="post-com">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<!--footer-->
	<?php include "inc-footer.php"?>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>