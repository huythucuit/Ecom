@auth
	@include('user.layouts.template_header_logged')
@endauth
@guest
	@include('user.layouts.template_header_notlogin')
@endguest

@include('user.layouts.template_footer')
