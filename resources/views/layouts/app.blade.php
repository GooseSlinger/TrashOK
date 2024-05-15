<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-wf-domain="cleaningtemplate.webflow.io" data-wf-page="61f167b25917d6fe5cbc753c" data-wf-site="61f167b25917d67e92bc753b" data-wf-status="1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/download.css', 'resources/js/app.js', 'resources/css/fancybox.css', 'resources/css/style.css'])
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/> --}}
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <style>
        
    </style>

</head>

<body>
	<div class="page-wrapper">
        {{-- хедер --}}
		<header data-w-id="726afb89-45b1-dddf-283e-3ba0d5ec88d3" data-animation="over-left" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
			<div data-w-id="726afb89-45b1-dddf-283e-3ba0d5ec88d4" class="container-default w-container">
				<div class="header-content-wrapper">
					<div class="header-left-side">
						<a href="#" aria-current="page" class="header-logo-link left w-nav-brand w--current"> 
                            <img src="{{ asset('storage/img/index/logo.png') }}" alt="Логотип" class="header-logo" /> 
                        </a>
						<nav role="navigation" class="header-nav-menu-wrapper w-nav-menu">
							<ul role="list" class="header-nav-menu-list">
								<li class="header-nav-list-item left"> 
                                    <a href="#" aria-current="page" class="header-nav-link w-nav-link w--current">Главная</a> 
                                </li>
								<li class="header-nav-list-item left"> 
                                    <a href="#" class="header-nav-link w-nav-link">Заказать услугу</a> 
                                </li>
								<li class="header-nav-list-item left"> 
                                    <a href="#" class="header-nav-link w-nav-link">Для работников</a> 
                                </li>
								<li class="header-nav-list-item left"> </li>
								<li class="header-nav-list-item show-in-tablet _100-tablet"> 
                                    <a href="#" class="btn-primary small sub-menu w-button">Вход / Регистрация</a> 
                                </li>
							</ul>
						</nav>
					</div>
					<div class="header-right-side">
						<div class="hamburger-menu-wrapper w-nav-button">
							<div class="hamburger-menu-bar top"></div>
							<div class="hamburger-menu-bar bottom"></div>
						</div>
						{{-- <div data-node-type="commerce-cart-wrapper" data-w-id="e9eaee57-7890-1b1c-601f-9592d0a25697" data-open-product="" data-wf-cart-type="modal" data-wf-cart-query="query Dynamo2 {}" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart-button-wrapper">
							<a href="home.html#" data-node-type="commerce-cart-open-link" data-w-id="e9eaee57-7890-1b1c-601f-9592d0a25698" class="w-commerce-commercecartopenlink cart-button w-inline-block" role="button" aria-haspopup="dialog" aria-label="Open cart"> </a>
							<div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal cart-wrapper">
								<div data-node-type="commerce-cart-container" role="dialog" class="w-commerce-commercecartcontainer cart-container">
									<div class="w-commerce-commercecartheader cart-header">
										<h4 class="w-commerce-commercecartheading heading-h5-size">Your Cart</h4>
										<a href="home.html#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink cart-close-button w-inline-block" role="button" aria-label="Close cart">
											<div class="line-square-icon"></div>
										</a>
									</div>
									<div class="w-commerce-commercecartformwrapper cart-form-wrapper">
										<form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
											<script type="text/x-wf-template" id="wf-template-e9eaee57-7890-1b1c-601f-9592d0a256a8">%3Cdiv%20class%3D%22w-commerce-commercecartitem%20cart-item-wrapper%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20cart-image-image%20border-radius-8px%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20cart-item-title%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22cart-item-price%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-e9eaee57-7890-1b1c-601f-9592d0a256ae%22%3E%253Cli%2520class%253D%2522pd-left-0%2522%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522capitalize%2520w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-e9eaee57-7890-1b1c-601f-9592d0a256ae%22%3E%3Cli%20class%3D%22pd-left-0%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22capitalize%20w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22cart-remove-link%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aec-product-type%2522%253A%257B%2522ne%2522%253A%2522e348fd487d0102946c9179d2a94bb613%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22w-commerce-commercecartquantity%20input%20cart-quantity-input%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
											<div class="w-commerce-commercecartlist cart-list" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-e9eaee57-7890-1b1c-601f-9592d0a256a8">
												<div class="w-commerce-commercecartitem cart-item-wrapper"> <img data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D" src="home.html" alt="" class="w-commerce-commercecartitemimage cart-image-image border-radius-8px w-dyn-bind-empty" />
													<div class="w-commerce-commercecartiteminfo">
														<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D" class="w-commerce-commercecartproductname cart-item-title w-dyn-bind-empty"></div>
														<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D" class="cart-item-price">$ 0.00 USD</div>
														<script type="text/x-wf-template" id="wf-template-e9eaee57-7890-1b1c-601f-9592d0a256ae">%3Cli%20class%3D%22pd-left-0%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22capitalize%20w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
														<ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D" class="w-commerce-commercecartoptionlist" data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr" data-wf-template-id="wf-template-e9eaee57-7890-1b1c-601f-9592d0a256ae">
															<li class="pd-left-0"> <span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D" class="capitalize w-dyn-bind-empty"></span> <span>: </span> <span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D" class="w-dyn-bind-empty"></span> </li>
														</ul>
														<a href="home.html#" role="" data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" class="w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id="" aria-label="Remove item from cart">
															<div class="cart-remove-link">Remove</div>
														</a>
													</div>
													<input data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aec-product-type%22%3A%7B%22ne%22%3A%22e348fd487d0102946c9179d2a94bb613%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D" class="w-commerce-commercecartquantity input cart-quantity-input" required="" pattern="^[0-9]+$" inputMode="numeric" type="number" name="quantity" autoComplete="off" data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1" /> </div>
											</div>
											<div class="w-commerce-commercecartfooter cart-footer">
												<div aria-live="" aria-atomic="false" class="w-commerce-commercecartlineitem cart-line-item">
													<div class="cart-subtotal">Subtotal:</div>
													<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" class="w-commerce-commercecartordervalue cart-subtotal-number"></div>
												</div>
												<div>
													<div data-node-type="commerce-cart-quick-checkout-actions" style="display:none">
														<a role="button" tabindex="0" aria-haspopup="dialog" aria-label="Apple Pay" data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton apple-pay-btn cart" tabindex="0">
															<div></div>
														</a>
														<a role="button" tabindex="0" aria-haspopup="dialog" data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton">
															<svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
																<defs>
																	<polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
																	<polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
																</defs>
																<g fill="none" fill-rule="evenodd">
																	<path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
																	<path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
																	<g transform="translate(0 4)">
																		<mask id="google-mark-b" fill="#fff">
																			<use xlink:href="#google-mark-a"></use>
																		</mask>
																		<path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
																	</g>
																	<mask id="google-mark-d" fill="#fff">
																		<use xlink:href="#google-mark-c"></use>
																	</mask>
																	<path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
																</g>
															</svg>
															<svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
																<g fill="none" fill-rule="evenodd">
																	<polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
																	<polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
																	<polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
																	<polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
																</g>
															</svg>
															<div>Pay with browser.</div>
														</a>
													</div> 
                                                    <a href="checkout.html" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton btn-primary" data-loading-text="Hang Tight...">Continue to Checkout</a> 
                                                </div>
											</div>
										</form>
										<div class="w-commerce-commercecartemptystate">
											<div>No items found.</div>
										</div>
										<div aria-live="" style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate error-state">
											<div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue." data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">Product is not available in this quantity.</div>
										</div>
									</div>
								</div>
							</div>
						</div>  --}}
                        {{-- <a href="#" class="btn-primary small header-btn-hidde-on-mb w-button">Вход / Регистрация</a>  --}}
                        <button id="mainAuthBtn" data-fancybox data-src="#authModal" class="btn-primary small header-btn-hidde-on-mb w-button">Вход / Регистрация</button>
                        <div id="authModal" style="display:none" class="authModal">
                            <form>
                                <div id="firstStageAuth" class="authForm">
                                    <h2 class="headerModal mb-12">Вход / Регистрация</h2>
                                    <div class="mb-10">
                                        <p class="textModal colorGreenSite mb-5">Телефон</p>
                                        <input class="inputAuth" type="text" value="" />
                                    </div>
                                    <div id="btnContinueStep1" class="btn-primary small w-button">Далее</div>
                                </div>
                                <div id="secondStageAuth" class="authForm hide">
                                    <h2 class="headerModal mb-12">Регистрация</h2>
                                    <div class="mb-5">
                                        <p class="textModal colorGreenSite mb-5">Имя</p>
                                        <input class="inputAuth" type="text" value="" />
                                    </div>
                                    <div class="mb-10">
                                        <p class="textModal colorGreenSite mb-5">Телефон</p>
                                        <input class="inputAuth" type="text" value="" />
                                    </div>
                                    <div id="btnContinueStep2" class="btn-primary small w-button">Далее</div>
                                </div>
                                <div id="thirdStageAuth" class="authForm hide">
                                    <h2 class="headerModal mb-12">На ваш номер отправили код</h2>
                                    <div class="mb-5">
                                        <p class="textModal colorGreenSite mb-5">Введите код</p>
                                        <input class="inputAuth" type="text" value="" />
                                    </div>
                                    <div class="btn-primary small w-button">Регистрация</div>
                                </div>
                            </form>
                        </div>                          
                    </div>
				</div>
			</div>
		</header>

        {{-- индекс заказы --}}
		@yield('order')
        
		<!-- индекс как мы работаем -->
		@yield('working')

        {{-- индекс разделяющая линия --}}
		@yield('separateLine')

        <!-- индекс работа -->
        @yield('joinTeam')

		<!-- индекс для кого -->
		@yield('forWhom')

        <!-- индекс где работают -->
        @yield('whereWork')

        <!-- индекс faq -->
        @yield('faq')

        <!-- индекс фидбек -->
        @yield('feedback')


        <!-- футер -->
        <footer class="footer-wrapper">
            <div class="container-default w-container">
                <div class="footer-top">
                    <div class="w-layout-grid grid-4-columns footer">
                        <div id="w-node-_759d9bce-dffa-02a5-918d-437a9a4f09b4-9a4f09b0" data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09b4">
                            <div class="display-4 mg-bottom-4px">Вынесем мусор вместо вас</div>
                            <p class="mg-bottom-40px">Избавляйтесь от бытового мусора, не выходя из дома!</p>
                            <div class="w-layout-grid social-media-grid-top">
                                <a href="https://facebook.com/" class="social-icon-square w-inline-block">
                                    <div class="social-icon-font"></div>
                                </a>
                                <a href="https://twitter.com/" class="social-icon-square w-inline-block">
                                    <div class="social-icon-font"></div>
                                </a>
                                <a href="https://www.instagram.com/" class="social-icon-square w-inline-block">
                                    <div class="social-icon-font"></div>
                                </a>
                                <a href="https://www.linkedin.com/" class="social-icon-square w-inline-block">
                                    <div class="social-icon-font"></div>
                                </a>
                                <a href="https://youtube.com/" class="social-icon-square w-inline-block">
                                    <div class="social-icon-font"></div>
                                </a>
                            </div>
                        </div>
                        <div data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09c9">
                            <div class="text-300 bold footer-title">Контакты</div>
                            <ul role="list" class="footer-list-wrapper">
                                <li class="footer-list-item">
                                    <div class="flex">
                                        <div class="line-rounded-icon color-neutral-800 mg-right-8px"></div>
                                        <div>Россия, республика Татарстан, Казань, ул.Тецевская</div>
                                    </div>
                                </li>
                                <li class="footer-list-item">
                                    <a data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09d4" href="tel:(414)567-2109" class="flex footer-link w-inline-block">
                                        <div class="line-rounded-icon color-neutral-800 mg-right-8px"> <strong class="footer-link-icon"></strong> </div>
                                        <div>8 (999) 999 - 99 - 99</div>
                                    </a>
                                </li>
                                <li class="footer-list-item">
                                    <a data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09db" href="mailto:contact@cleaning.com" class="flex footer-link w-inline-block">
                                        <div class="line-rounded-icon color-neutral-800 mg-right-8px"> <strong class="footer-link-icon"></strong> </div>
                                        <div>example@gmail.com</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09e1">
                            <div class="text-300 bold footer-title">Рабочее время</div>
                            <ul role="list" class="footer-list-wrapper">
                                <li class="footer-list-item">
                                    <div class="mg-bottom-8px">
                                        <div class="text-200 bold color-neutral-800">Пн - пт</div>
                                    </div>
                                    <div>6:00 - 21:00</div>
                                </li>
                                <li class="footer-list-item">
                                    <div class="mg-bottom-8px">
                                        <div class="text-200 bold color-neutral-800">Сб, вск</div>
                                    </div>
                                    <div>8:00 - 20:00</div>
                                </li>
                            </ul>
                        </div>
                        <div id="w-node-_759d9bce-dffa-02a5-918d-437a9a4f09f1-9a4f09b0" data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09f1">
                            <div class="text-300 bold footer-title">Делегируйте лишние обязанности</div>
                            <p class="mg-bottom-24px">МусорОк - сервис для выноса бытового
                                <br> мусора в Казани</p> 
                                <a href="#" class="btn-primary w-button">Оставить заявку</a> 
                            </div>
                    </div>
                </div>
                <div class="footer-bottom text-right text-center-mb">
                    <div class="w-layout-grid grid-footer-logo---paragraph">
                        <a id="w-node-_759d9bce-dffa-02a5-918d-437a9a4f09fc-9a4f09b0" data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09fc" href="#" aria-current="page" class="footer-logo-wrapper mg-bottom-0 w-inline-block w--current"> 
                            <img src="{{ asset('storage/img/index/logo.png') }}" alt="Логотип" class="footer-logo" /> 
                        </a>
                        <p data-w-id="759d9bce-dffa-02a5-918d-437a9a4f09fe" class="mg-bottom-0 center-tablet">
                            <a href="#">Политика конфиденциальности</a> &nbsp
                            <br> <a href="#">Договор оферты</a> 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @vite(['resources/js/download/jquery.js', 'resources/js/download/webflow.js'])
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
</body>

</html>
