<?php
include './include/header.php';
?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-textcolor-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">About Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-2.html">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                                <span class="current">About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row checkout-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-form-coupon-toggle">
                            <div class="ttm-form-coupon-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
                        </div>
                        <form name="checkout" method="post" class="checkout row" action="#">
                            <div class="col-lg-6">
                                <div class="billing-fields">
                                    <h3>Billing details</h3>
                                    <p class="form-row">
                                        <label>First name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-tex" name="billing_first_name" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Last name&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="billing_last_name" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Company name&nbsp;<span class="optional">(optional)</span></label>
                                        <input type="text" class="input-text " name="billing_company" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Country&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <select name="billing_country" class="country_to_state country_select" tabindex="-1" aria-hidden="true">
                                            <option value="">Select a country…</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                        </select>
                                    </p>
                                    <p class="form-row">
                                        <label>Street address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text" name="billing_address_1" placeholder="House number and street name" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Apartment, suite, or unit.&nbsp;
                                            <span class="optional">(optional)</span>
                                        </label>
                                        <input type="text" class="input-text " name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="billing_city" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>State / County&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <select name="billing_state" id="billing_state" class="state_select select2-hidden-accessible">
                                            <option value="">Select a state…</option>
                                            <option value="AP">Andhra Pradesh</option>
                                            <option value="AR">Arunachal Pradesh</option>
                                            <option value="AS">Assam</option>
                                            <option value="BR">Bihar</option>
                                        </select>
                                    </p>
                                    <p class="form-row">
                                        <label>Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="input-text " name="billing_postcode" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Phone&nbsp;<span class="optional">(optional)</span></label>
                                        <input type="tel" class="input-text " name="billing_phone" placeholder="" value="">
                                    </p>
                                    <p class="form-row">
                                        <label>Email address&nbsp;<abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="input-text " name="billing_email" placeholder="" value="">
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="additional-fields">
                                    <h3>Additional information</h3>
                                    <div class="additional-fields-wrapper">
                                        <p class="form-row" id="order_comments_field">
                                            <label>Order notes&nbsp;<span class="optional">(optional)</span></label>
                                            <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h3 id="order_review_heading">Your order</h3>
                                <div id="order_review" class="checkout-review-order">
                                    <table class="shop_table checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">Clock Work&nbsp;
                                                    <strong class="product-quantity">× 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="Price-amount">
                                                        <span class="Price-currencySymbol">$</span>30.00
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span class="Price-amount amount">
                                                        <span class="Price-currencySymbol">$</span>30.00
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>30.00</span></strong> </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="checkout-payment">
                                        <ul class="payment_methods">
                                            <li class="payment_method_ppec_paypal">
                                                <div class="payment_box">
                                                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order">
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                            <button type="submit" class="button submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-dark" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Continue to payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div><!--site-main end-->
<?php
    include './include/footer.php';
    ?>