@extends('layouts.parent')

@section('content')
<section class="bg-light">
    <div class="nav-container">
        <a id="top"></a>
        <nav class="nav-centered absolute transparent hover-underline-menu" data-menu-underline-from-center>
            <!--<div class="text-center">
                <a href="index.html">
                    <img class="logo logo-light" alt="Foundry" src="img/logo-light.png" />
                    <img class="logo logo-dark" alt="Foundry" src="img/logo-dark.png" />
                </a>
            </div>-->
            <div class="nav-bar text-center">
                <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                    <i class="ti-menu"></i>
                </div>
                <div class="module-group text-left">
                    <div class="module left">
                        <ul class="menu align-center">
                            <li class="fa-li">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li class="has-dropdown">
                                <a href="/signature-collection">
                                    Signature Collection
                                </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="/less-is-more">Less Is More</a>
                                            </li>
                                            <li>
                                                <a href="/luxury-scarves">LUXURY SCARVES</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="fa-li">
                                <a href="/">
                                    Lifestyle
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/about">
                                    About Us
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/">
                                    Shop My Look
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/contacts">
                                    Contacts
                                </a>
                            </li>
                            <li class="fa-li">
                                <a href="/work-with-us">
                                    Work With Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end of menu module-->
                </div>
                <!--end of module group-->
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="height"></div>
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3 class="bold uppercase headerLine">Less is More</h3>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/1.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/2.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/3.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
        </div>
        <div class="height"></div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/4.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/5.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/6.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
        </div>
        <div class="height"></div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/7.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/8.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/9.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
        </div>
        <div class="height"></div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/10.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/11.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/12.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Road Trippin'</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
        </div>
        <div class="height"></div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/13.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Hanging Ten</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <img alt="Pic" class="mb24" src="img/less_is_more/14.jpeg"/>
                </a>
                <a href="#">
                    <h4 class="mb8">Round The Twist</h4>
                </a>
                <ul class="list-inline mb16">
                    <li>
                        NJ Misty
                    </li>
                    <li>
                        <a href="https://www.facebook.com/lucednj/">
                            <span class="label">BOOK THIS LOOK</span>
                        </a>
                    </li>
                </ul>
                <p class="mb0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pharetra eros. Vivamus eu nisi
                    ut dui bibendum ornare vitae a enim. Sed sit amet
                </p>
                <div class="height"></div>
                <div class="text-left">
                    <div class="modal-container">
                        <a class="btn btn-sm btn-modal" href="#">
                            <i class="fa fa-bars"></i>SEE MORE</a>
                        <div class="foundry_modal">
                            <h4>Hanging Ten</h4>
                            <h6>@njmisty</h6>
                            <hr>
                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cupiditate explicabo inventore iure nostrum pariatur quos! Debitis eligendi est, ex illo non perspiciatis quia, quis quo repellat sapiente sint tempora.</span><span>Accusantium animi architecto asperiores eaque eius eligendi eos, ex fugiat impedit ipsam iste laboriosam libero magni molestias nemo nihil quae quaerat quisquam quod tempora? Ad animi est harum placeat tenetur.</span><span>Ab aspernatur consectetur cumque eius eveniet excepturi fuga itaque magnam minima nam non obcaecati quam reiciendis reprehenderit, totam, veniam voluptatem! Assumenda commodi dicta ducimus enim numquam quibusdam reprehenderit sunt ut!</span><span>Accusamus ad adipisci aliquam animi autem, beatae consequuntur culpa dolor facere, id in ipsa iste iure libero minima, minus placeat praesentium quae quisquam saepe sequi suscipit veritatis vitae voluptas voluptatum.</span>
                            </p>

                            <p>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolores ea, earum illum, iste laboriosam magni minima minus molestiae nam officiis soluta. Ad aspernatur fuga fugiat natus quisquam veniam.</span><span>Aperiam architecto asperiores aspernatur, consequatur deserunt dolores facilis id in laboriosam minus modi natus neque nihil nostrum officia pariatur praesentium, rem repudiandae sed sequi soluta sunt unde vitae voluptas voluptates.</span><span>Animi assumenda aut consequatur cum cupiditate delectus dolorum ea enim est eum fugiat harum ipsa ipsam labore magni minima odit officiis quae qui quidem, quis repellat soluta, temporibus voluptates voluptatum!</span>
                            </p>
                        </div>

                    </div>
                    <!--end modal-->
                </div>
            </div>
        </div>
        <div class="height"></div>

    </div>
    <!--end of container-->
</section>
@endsection
