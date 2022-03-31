@extends('layouts.app')

<?php
$variables = [
	'auth' => [
		'login' => [
			'errors' => [
				'email' => $errors->get('email'),
				'password' => $errors->get('password'),
			],
			'labels' => [
				'formTitle' => __('Login'),
				'email' => __('E-Mail Address'),
				'password' => __('Password'),
				'rememberMe' => __('Remember Me'),
				'passwordReset' => __('Forgot Your Password?'),
				'button' => __('Login'),
			],
			'routes' => [
				'login' => route('login'),
				'passwordRequest' => route('password.request'),
			],
			'oldValues' => [
				'email' => old('email'),
				'remember' => old('remember'),
			],
		],
	]
]
?>

@section('content')
	<script>
		window.serverSideData = Object.assign(window.serverSideData, @json($variables));
	</script>
	@csrf
@endsection