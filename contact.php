<body xmlns="http://www.w3.org/1999/html" class="bg-light">

<!-- NavBars -->

<!-- NavBars -->

<!-- Heder -->
<div class="hedertekst m-auto text-center">
    <img class="pt-5" src="/images/belogo.JPG" alt="treba da bude logo" >
        <h2 class="pt-4">Checkout Form</h2>
        <p class="pl-4 m-auto text-muted" style="max-width: 850px; font-size: large">Below is an example form built entirely with Bootstrap’s form controls.
            Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
</div>
<!-- Heder -->

<br>
<br>
<br>
<!-- Contet of cite -->
<div class="sadrzaj pb-3">
    <div class="row" >
        <div class="col-md-4 order-md-2">
                <h4 class="d-flex justify-content-between align-items-center pb-2">
                    <span class="text-muted">Your chart</span>
                    <span class="badge badge-secondary badge-pill ">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between ">
                        <div>
                            <h6 class="my-0">Cras justo odio</h6>
                            <small <span class="text-muted "> description</span></small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between ">
                        <div>
                            <h6 class="my-0">Cras justo odio</h6>
                            <small <span class="text-muted "> description</span></small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between ">
                        <div>
                            <h6 class="my-0">Cras justo odio</h6>
                            <small <span class="text-muted "> description</span></small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between ">
                        <div>
                            <h6 class="my-0">Cras justo odio</h6>
                            <small <span class="text-muted "> description</span></small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between ">
                        <div>
                            <h6 class="my-0">Cras justo odio</h6>
                            <small <span class="text-muted "> description</span></small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                </ul>
                <div class="card p-2">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-md-8 order-md-1" >
            <h4>Biling adress</h4>
            <div class="row">
                <div class="col-md-6"> <label>Frist name</label>
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6"><label>Last name</label>
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
                <div class="col-md-12 pt-2"><label>Username</label>
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                </div>
                <div class="col-md-12 pt-2"><label>Email</label>
                    <input type="text" class="form-control" placeholder="you@gmmail.com">
                </div>
                <div class="col-md-12 pt-2"><label>Adress</label>
                    <input type="text" class="form-control" placeholder="for example: 15321 Radalj">
                </div>
                <div class="col-md-12 pt-2"><label>Adress 2 <span style="font-weight: 200">(optional)</span></label>
                    <input type="text" class="form-control" placeholder="does not matter">
                </div>
            </div>
                <div class="row ">
                    <div class="col-md-5 "> <label>Country</label>
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">Serbia</option>
                            <option value="2">Monte Negro</option>
                            <option value="3">Macedonia</option>
                        </select>
                    </div>
                    <div class="col-md-4 "> <label>State</label>
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">Serbia</option>
                            <option value="2">Monte Negro</option>
                            <option value="3">Macedonia</option>
                        </select>
                    </div>
                    <div class="col-md-3"> <label>Zip</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            <hr class="pb-2">

            <div class="row  ml-1">
                <div class="form-check custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="gridCheck">
                        <label class="custom-control-label" for="gridCheck">
                            Shipping address is the same as my billing address
                        </label>
                </div>
            </div>
                <div class="row  ml-1">
                    <div class="form-check custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">
                            Save this information for next time
                        </label>
                    </div>
                </div>
            <hr>
                <div class="row pl-3">
                        <div>
                            <h4>Payment</h4>
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                </div>
                <div class="row pt-1">
                    <div class="col-md-6"> <label>Name on card</label>
                        <input type="text" class="form-control" >
                        <p class="text-muted trtr">Full name as displayed on card</p>
                    </div>
                    <div class="col-md-6"><label>Credit card number</label>
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> <label>Expiration</label>
                        <input type="text" class="form-control" required >
                    </div>
                    <div class="col-md-3"><label>CVV</label>
                        <input type="text" class="form-control" >
                    </div>
                </div>
            <hr>
                <button class="btn btn-primary btn-lg btn-block "  type="submit">Continue to checkout</button>
        </div>
    </div>

    <div class="footer text-center pt-5">
        <p class="text-muted my-0">© 2017-2019 t-shark</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"<p>Privace</p> </li>
            <li class="list-inline-item"><a href="#"<p>Privace</p></li>
            <li class="list-inline-item"><a href="#"<p>Privace</p></li>
        </ul>
    </div>


</div>
<!-- Contet of cite -->


<!--Footer-->


<!--Footer-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>