<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('theme.web.head')

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Login Modal -->
		
        @include('theme.web.loginModal')


		<!-- Top Bar
		============================================= -->
		

		<!-- Header
		============================================= -->
		
        @include('theme.web.header')

        <!-- #header end -->

		<!-- Slider
		============================================= -->
		

        <!-- #Slider End -->

		<!-- Content
		============================================= -->
        {{$slot}}
		<!-- #content end -->

		<!-- Footer
		============================================= -->
        @include('theme.web.footer')
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>
	@include('theme.web.script')

</body>
</html>