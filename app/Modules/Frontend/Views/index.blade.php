@extends('Frontend::layouts/default')
    @section('banner')
    <!--************************************
    Home Slider Start
    *************************************-->
    <div class="tg-homebannerandslider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="tg-accordionandcategorysearch hidden-xs">
                            <div class="tg-categoreyaccordion">
                                <div class="tg-themescrollbar">
                                    <div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-automotive tg-radio">
                                                <input type="radio" id="tg-radioautomotive" name="tg-categories" value="automovice" checked>
                                                <label for="tg-radioautomotive">
                                                    <span class="lnr lnr-car tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Automotive</span>
                                                        <span class="tg-typesandjobs">3215 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocabservice" name="tg-categories" value="Cab Service">
                                                    <label for="tg-radiocabservice">
                                                        <span class="tg-categoryname">Cab Service</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocarcareservicing" name="tg-categories" value="Car Care &amp; Servicing">
                                                    <label for="tg-radiocarcareservicing">
                                                        <span class="tg-categoryname">Car Care &amp; Servicing</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocardealer" name="tg-categories" value="Car Dealer">
                                                    <label for="tg-radiocardealer">
                                                        <span class="tg-categoryname">Car Dealer</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiorentacar" name="tg-categories" value="Rent A Car">
                                                    <label for="tg-radiorentacar">
                                                        <span class="tg-categoryname">Rent A Car</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiodenterpainter" name="tg-categories" value="Denter and Painter">
                                                    <label for="tg-radiodenterpainter">
                                                        <span class="tg-categoryname">Denter and Painter</span>
                                                        <span class="tg-typesandjobs">711 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-beautypersonalcare tg-radio">
                                                <input type="radio" id="tg-radiobeautypersonalcare" name="tg-categories" value="Beauty &amp; Personal Care">
                                                <label for="tg-radiobeautypersonalcare">
                                                    <span class="lnr lnr-heart tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Beauty &amp; Personal Care</span>
                                                        <span class="tg-typesandjobs">3045 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiobeautyparlor" name="tg-categories" value="Beauty Parlor">
                                                    <label for="tg-radiobeautyparlor">
                                                        <span class="tg-categoryname">Beauty Parlor</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiospacenter" name="tg-categories" value="Spa Center">
                                                    <label for="tg-radiospacenter">
                                                        <span class="tg-categoryname">Spa Center</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiomassagecenter" name="tg-categories" value="Massage Center">
                                                    <label for="tg-radiomassagecenter">
                                                        <span class="tg-categoryname">Massage Center</span>
                                                        <span class="tg-typesandjobs">711 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-business tg-radio">
                                                <input type="radio" id="tg-radiobusiness" name="tg-categories" value="Business">
                                                <label for="tg-radiobusiness">
                                                    <span class="lnr lnr-apartment tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Business</span>
                                                        <span class="tg-typesandjobs">2478 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioeventorganizer" name="tg-categories" value="Event Organizer">
                                                    <label for="tg-radioeventorganizer">
                                                        <span class="tg-categoryname">Event Organizer</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiofinance&amp;legal" name="tg-categories" value="Finance &amp; Legal">
                                                    <label for="tg-radiofinance&amp;legal">
                                                        <span class="tg-categoryname">Finance &amp; Legal</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiomarketing" name="tg-categories" value="Marketing">
                                                    <label for="tg-radiomarketing">
                                                        <span class="tg-categoryname">Marketing</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioitwebdevelopment" name="tg-categories" value="IT/Web Development">
                                                    <label for="tg-radioitwebdevelopment">
                                                        <span class="tg-categoryname">IT/Web Development</span>
                                                        <span class="tg-typesandjobs">711 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-childcare tg-radio">
                                                <input type="radio" id="tg-radiochildcare" name="tg-categories" value="Child Care">
                                                <label for="tg-radiochildcare">
                                                    <span class="lnr lnr-smile tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Child Care</span>
                                                        <span class="tg-typesandjobs">2655 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiochildcarecenter" name="tg-categories" value="Child Care Center">
                                                    <label for="tg-radiochildcarecenter">
                                                        <span class="tg-categoryname">Child Care Center</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopediatrician" name="tg-categories" value="Pediatrician">
                                                    <label for="tg-radiopediatrician">
                                                        <span class="tg-categoryname">Pediatrician</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiokidstraining" name="tg-categories" value="Special Kids Training">
                                                    <label for="tg-radiokidstraining">
                                                        <span class="tg-categoryname">Special Kids Training</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-cleaning tg-radio">
                                                <input type="radio" id="tg-radiocleaning" name="tg-categories" value="Cleaning">
                                                <label for="tg-radiocleaning">
                                                    <span class="lnr lnr-magic-wand tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Cleaning</span>
                                                        <span class="tg-typesandjobs">4515 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiohomecleaning" name="tg-categories" value="Home Cleaning">
                                                    <label for="tg-radiohomecleaning">
                                                        <span class="tg-categoryname">Home Cleaning</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocommecialcleaning" name="tg-categories" value="Commercial Cleaning">
                                                    <label for="tg-radiocommecialcleaning">
                                                        <span class="tg-categoryname">Commercial Cleaning</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiolaundry" name="tg-categories" value="Laundry">
                                                    <label for="tg-radiolaundry">
                                                        <span class="tg-categoryname">Laundry</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocarpetcleaning" name="tg-categories" value="Carpet Cleaning">
                                                    <label for="tg-radiocarpetcleaning">
                                                        <span class="tg-categoryname">Carpet Cleaning</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-computermobile tg-radio">
                                                <input type="radio" id="tg-radiocomputermobile" name="tg-categories" value="Computer &amp; Mobile Service">
                                                <label for="tg-radiocomputermobile">
                                                    <span class="lnr lnr-laptop tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Computer &amp; Mobile Service</span>
                                                        <span class="tg-typesandjobs">1015 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiomobilerepair" name="tg-categories" value="Mobile Repair">
                                                    <label for="tg-radiomobilerepair">
                                                        <span class="tg-categoryname">Mobile Repair</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocomputerlaptoprepair" name="tg-categories" value="Computer &amp; Laptop Repair">
                                                    <label for="tg-radiocomputerlaptoprepair">
                                                        <span class="tg-categoryname">Computer &amp; Laptop Repair</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-fooddrinks tg-radio">
                                                <input type="radio" id="tg-radiofooddrinks" name="tg-categories" value="Food &amp; Drinks">
                                                <label for="tg-radiofooddrinks">
                                                    <span class="lnr lnr-coffee-cup tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Food &amp; Drinks</span>
                                                        <span class="tg-typesandjobs">1515 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopubs&amp;bars" name="tg-categories" value="Pubs &amp; Bars">
                                                    <label for="tg-radiopubs&amp;bars">
                                                        <span class="tg-categoryname">Pubs &amp; Bars</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioresturant" name="tg-categories" value="Resturant">
                                                    <label for="tg-radioresturant">
                                                        <span class="tg-categoryname">Resturant</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioCafe" name="tg-categories" value="Cafe">
                                                    <label for="tg-radioCafe">
                                                        <span class="tg-categoryname">Cafe</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiofastfood" name="tg-categories" value="Fast Food">
                                                    <label for="tg-radiofastfood">
                                                        <span class="tg-categoryname">Fast Food</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-generallabor tg-radio">
                                                <input type="radio" id="tg-radiogenerallabor" name="tg-categories" value="General Labor">
                                                <label for="tg-radiogenerallabor">
                                                    <span class="lnr lnr-users tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">General Labor</span>
                                                        <span class="tg-typesandjobs">2815 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocarpenter" name="tg-categories" value="Carpenter">
                                                    <label for="tg-radiocarpenter">
                                                        <span class="tg-categoryname">Carpenter</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioplumber" name="tg-categories" value="Plumber">
                                                    <label for="tg-radioplumber">
                                                        <span class="tg-categoryname">Plumber</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioelectrician" name="tg-categories" value="Electrician">
                                                    <label for="tg-radioelectrician">
                                                        <span class="tg-categoryname">Electrician</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopainter" name="tg-categories" value="Painter">
                                                    <label for="tg-radiopainter">
                                                        <span class="tg-categoryname">Painter</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-constructionrevovation tg-radio">
                                                <input type="radio" id="tg-radioconstructionrevovation" name="tg-categories" value="Construction &amp; Renovation">
                                                <label for="tg-radioconstructionrevovation">
                                                    <span class="lnr lnr-construction tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Construction &amp; Renovation</span>
                                                        <span class="tg-typesandjobs">9015 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiorenovation" name="tg-categories" value="Renovation Companies">
                                                    <label for="tg-radiorenovation">
                                                        <span class="tg-categoryname">Renovation Companies</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocontruction" name="tg-categories" value="Contruction Companies">
                                                    <label for="tg-radiocontruction">
                                                        <span class="tg-categoryname">Contruction Companies</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-healthfitness tg-radio">
                                                <input type="radio" id="tg-radiohealthfitness" name="tg-categories" value="Health &amp; Fitness">
                                                <label for="tg-radiohealthfitness">
                                                    <span class="lnr lnr-heart-pulse tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Health &amp; Fitness</span>
                                                        <span class="tg-typesandjobs">4515 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiogymcenter" name="tg-categories" value="Gym Center">
                                                    <label for="tg-radiogymcenter">
                                                        <span class="tg-categoryname">Gym Center</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioyogacenter" name="tg-categories" value="Yoga Center">
                                                    <label for="tg-radioyogacenter">
                                                        <span class="tg-categoryname">Yoga Center</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioneurosurgeon" name="tg-categories" value="Neurosurgeon">
                                                    <label for="tg-radioneurosurgeon">
                                                        <span class="tg-categoryname">Neurosurgeon</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiophysician" name="tg-categories" value="Physician">
                                                    <label for="tg-radiophysician">
                                                        <span class="tg-categoryname">Physician</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocardiologist" name="tg-categories" value="Cardiologist">
                                                    <label for="tg-radiocardiologist">
                                                        <span class="tg-categoryname">Cardiologist</span>
                                                        <span class="tg-typesandjobs">711 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiodentist" name="tg-categories" value="Dentist">
                                                    <label for="tg-radiodentist">
                                                        <span class="tg-categoryname">Dentist</span>
                                                        <span class="tg-typesandjobs">711 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-petcare tg-radio">
                                                <input type="radio" id="tg-radiopetcare" name="tg-categories" value="Pet Care">
                                                <label for="tg-radiopetcare">
                                                    <span class="lnr lnr-paw tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Pet Care</span>
                                                        <span class="tg-typesandjobs">3160 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopetcarecenter" name="tg-categories" value="Pet Care Center">
                                                    <label for="tg-radiopetcarecenter">
                                                        <span class="tg-categoryname">Pet Care Center</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopetdealer" name="tg-categories" value="Pet Dealer">
                                                    <label for="tg-radiopetdealer">
                                                        <span class="tg-categoryname">Pet Dealer</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiowildanimalcare" name="tg-categories" value="Wild Animal Care">
                                                    <label for="tg-radiowildanimalcare">
                                                        <span class="tg-categoryname">Wild Animal Care</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-traningeducation tg-radio">
                                                <input type="radio" id="tg-radiotraningeducation" name="tg-categories" value="Traning &amp; Education">
                                                <label for="tg-radiotraningeducation">
                                                    <span class="lnr lnr-book tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Traning &amp; Education</span>
                                                        <span class="tg-typesandjobs">1208 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiocardriving" name="tg-categories" value="Car Driving">
                                                    <label for="tg-radiocardriving">
                                                        <span class="tg-categoryname">Car Driving</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioselfmotivationcenter" name="tg-categories" value="Self Motivation Center">
                                                    <label for="tg-radioselfmotivationcenter">
                                                        <span class="tg-categoryname">Self Motivation Center</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioeducationinstitute" name="tg-categories" value="Education Institute">
                                                    <label for="tg-radioeducationinstitute">
                                                        <span class="tg-categoryname">Education Institute</span>
                                                        <span class="tg-typesandjobs">490 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radioanimaltrainingcenter" name="tg-categories" value="Animal Training Center">
                                                    <label for="tg-radioanimaltrainingcenter">
                                                        <span class="tg-categoryname">Animal Training Center</span>
                                                        <span class="tg-typesandjobs">1180 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-panel">
                                            <div class="tg-accordionheading tg-transportationtravel tg-radio">
                                                <input type="radio" id="tg-radiotransportationtravel" name="tg-categories" value="Transportation &amp; Travel">
                                                <label for="tg-radiotransportationtravel">
                                                    <span class="lnr lnr-train tg-categoryicon"></span>
                                                    <span class="tg-catenameandtypes">
                                                        <span class="tg-categoryname">Transportation &amp; Travel</span>
                                                        <span class="tg-typesandjobs">1715 Providers</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="tg-panelcontent">
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiopacker&amp;movers" name="tg-categories" value="Packer &amp; Movers">
                                                    <label for="tg-radiopacker&amp;movers">
                                                        <span class="tg-categoryname">Packer &amp; Movers</span>
                                                        <span class="tg-typesandjobs">609 Providers</span>
                                                    </label>
                                                </div>
                                                <div class="tg-subcategoryradio tg-radio">
                                                    <input type="radio" id="tg-radiotourtravelservice" name="tg-categories" value="Tour &amp; Travel Service">
                                                    <label for="tg-radiotourtravelservice">
                                                        <span class="tg-categoryname">Tour &amp; Travel Service</span>
                                                        <span class="tg-typesandjobs">225 Providers</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-categorysearch">
                                <form class="tg-formtheme tg-formcategorysearch">
                                    <fieldset>
                                        <input type="search" name="search" class="form-control" placeholder="Search Category">
                                        <button class="tg-btnsearch" type="submit"><i class="lnr lnr-magnifier"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="tg-searchbox">
                            <form class="tg-formtheme tg-formsearch">
                                <fieldset>
                                    <legend>Search Thousands of Qualified Professionals</legend>
                                    <div class="form-group">
                                        <input type="text" name="keyword" class="form-control" placeholder="Keyword">
                                    </div>
                                    <div class="form-group hidden-sm hidden-md hidden-lg">
                                        <input type="text" name="category" class="form-control" placeholder="Select Category">
                                    </div>
                                    <div class="form-group tg-inputwithicon">
                                        <div class="locate-me-wrap">
                                            <div id="location-pickr-map" class="elm-display-none"></div>
                                            <input type="text"  autocomplete="on" id="location-address" value="" name="geo_location" placeholder="Geo location" class="form-control">
                                            <a href="javascript:;" class="geolocate"><i class="fa fa-crosshairs"></i></a>
                                            <a href="javascript:;" class="geodistance"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <div class="geodistance_range elm-display-none">
                                                <div class="distance-ml">Distance in&nbsp;( Miles )<span> 50</span></div>
                                                <input type="hidden" name="geo_distance" value="50" class="geo_distance" />
                                                <div class="geo_distance" id="geo_distance"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group tg-select">
                                        <select>
                                            <option value="">Select Location</option>
                                            <option value="aberdeen">Aberdeen</option>
                                            <option value="aldershot">Aldershot</option>
                                            <option value="altrincham">Altrincham</option>
                                            <option value="aylesbury">Aylesbury</option>
                                            <option value="bamber">Bamber</option>
                                            <option value="bangor">Bangor</option>
                                            <option value="batley">Batley</option>
                                            <option value="bebingto">Bebingto</option>
                                            <option value="bedford">Bedford</option>
                                            <option value="birmingham">Birmingham</option>
                                            <option value="blackpool">Blackpool</option>
                                            <option value="brentwood">Brentwood</option>
                                            <option value="bristol">Bristol</option>
                                            <option value="cardiff">Cardiff</option>
                                            <option value="carlisle">Carlisle</option>
                                            <option value="crawley">Crawley</option>
                                            <option value="darlington">Darlington</option>
                                            <option value="eastleigh">Eastleigh</option>
                                            <option value="edinburg">Edinburg</option>
                                            <option value="esher">Esher</option>
                                            <option value="glasgow-sco">Glasgow SCO</option>
                                            <option value="guildford">Guildford</option>
                                            <option value="halesowen">Halesowen</option>
                                            <option value="halifax">Halifax</option>
                                            <option value="hamilton">Hamilton</option>
                                            <option value="leeds">Leeds</option>
                                            <option value="leicester">Leicester</option>
                                            <option value="liverpool">Liverpool</option>
                                            <option value="london">London</option>
                                            <option value="louisville">Louisville</option>
                                            <option value="manchester">Manchester</option>
                                            <option value="sheffield">Sheffield</option>
                                        </select>
                                    </div>
                                    <div class="form-group tg-select">
                                        <select>
                                            <option>States</option>
                                            <option>Manchester</option>
                                            <option>Birmingham</option>
                                            <option>Bradford</option>
                                        </select>
                                    </div>
                                    <div class="form-group tg-select">
                                        <select>
                                            <option value="city">City</option>
                                            <option>Manchester</option>
                                            <option>Birmingham</option>
                                            <option>Bradford</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="zipcode" class="form-control" placeholder="zip code">
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-checkbox">
                                            <input type="checkbox" id="tg-onlywithphoto" name="findonlywithprofilephoto" value="Find Only With Profile Photo">
                                            <label for="tg-onlywithphoto">Find Only With Profile Photo</label>
                                        </div>
                                    </div>
                                    <div class="tg-btns">
                                        <button class="tg-btn" type="submit">Search Now</button>
                                        <button class="tg-btn" type="reset">Reset All</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="tg-featuredprofiles">
                            <h1><span>Featured</span><span>Service Providers</span></h1>
                            <div id="tg-featuredprofileslider" class="tg-featuredprofileslider owl-carousel">
                                <div class="item tg-profile tg-featuredprofile">
                                    <figure style="background-image:url({{ asset ('/public/frontend/images/slider/img-01.jpg') }});">
                                        <figcaption>
                                        <div class="tg-featuredprofilecontent">
                                            <div class="tg-contentbox">
                                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-01.png') }}" alt="image description"></a></div>
                                                <div class="tg-companycontent">
                                                    <ul class="tg-tags">
                                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                                    </ul>
                                                    <div class="tg-title">
                                                        <h3><a href="#">Bright Future Group &amp; Company</a></h3>
                                                    </div>
                                                    <ul class="tg-matadata">
                                                        <li><span class="tg-stars"><span></span></span></li>
                                                        <li>
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                            <em>99% (1009 votes)</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="tg-btn" href="listingdetail.html">View Profile</a>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="item tg-profile tg-featuredprofile">
                                    <figure style="background-image:url({{ asset ('/public/frontend/images/slider/img-02.jpg') }});">
                                        <figcaption>
                                        <div class="tg-featuredprofilecontent">
                                            <div class="tg-contentbox">
                                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-01.png') }}" alt="image description"></a></div>
                                                <div class="tg-companycontent">
                                                    <ul class="tg-tags">
                                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                                    </ul>
                                                    <div class="tg-title">
                                                        <h3><a href="#">Bright Future Group &amp; Company</a></h3>
                                                    </div>
                                                    <ul class="tg-matadata">
                                                        <li><span class="tg-stars"><span></span></span></li>
                                                        <li>
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                            <em>99% (1009 votes)</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="tg-btn" href="listingdetail.html">View Profile</a>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="item tg-profile tg-featuredprofile">
                                    <figure style="background-image:url({{ asset ('/public/frontend/images/slider/img-03.jpg') }});">
                                        <figcaption>
                                        <div class="tg-featuredprofilecontent">
                                            <div class="tg-contentbox">
                                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-01.png') }}" alt="image description"></a></div>
                                                <div class="tg-companycontent">
                                                    <ul class="tg-tags">
                                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                                    </ul>
                                                    <div class="tg-title">
                                                        <h3><a href="#">Bright Future Group &amp; Company</a></h3>
                                                    </div>
                                                    <ul class="tg-matadata">
                                                        <li><span class="tg-stars"><span></span></span></li>
                                                        <li>
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                            <em>99% (1009 votes)</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="tg-btn" href="listingdetail.html">View Profile</a>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="item tg-profile tg-featuredprofile">
                                    <figure style="background-image:url({{ asset ('/public/frontend/images/slider/img-04.jpg') }});">
                                        <figcaption>
                                        <div class="tg-featuredprofilecontent">
                                            <div class="tg-contentbox">
                                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-01.png') }}" alt="image description"></a></div>
                                                <div class="tg-companycontent">
                                                    <ul class="tg-tags">
                                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                                    </ul>
                                                    <div class="tg-title">
                                                        <h3><a href="#">Bright Future Group &amp; Company</a></h3>
                                                    </div>
                                                    <ul class="tg-matadata">
                                                        <li><span class="tg-stars"><span></span></span></li>
                                                        <li>
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                            <em>99% (1009 votes)</em>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="tg-btn" href="listingdetail.html">View Profile</a>
                                        </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
    Home Slider End
    *************************************-->
    @endsection
    @section('content')
    <!--************************************
    Top Categories Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>Start With Top Categories</h2>
                        </div>
                        <div class="tg-description">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip extea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="tg-topcategories">
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-01.png') }}" alt="image description">
                                <figcaption class="tg-automotive">
                                <span class="lnr lnr-car tg-categoryicon"></span>
                                <span class="tg-categoryname">Automotive</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>3215</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-02.png') }}" alt="image description">
                                <figcaption class="tg-beautypersonalcare">
                                <span class="lnr lnr-heart tg-categoryicon"></span>
                                <span class="tg-categoryname">beauty &amp; personal care</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>3045</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-03.png') }}" alt="image description">
                                <figcaption class="tg-business">
                                <span class="lnr lnr-apartment tg-categoryicon"></span>
                                <span class="tg-categoryname">business</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>2478</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-04.png') }}" alt="image description">
                                <figcaption class="tg-childcare">
                                <span class="lnr lnr-smile tg-categoryicon"></span>
                                <span class="tg-categoryname">child care</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>2655</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-05.png') }}" alt="image description">
                                <figcaption class="tg-cleaning">
                                <span class="lnr lnr-magic-wand tg-categoryicon"></span>
                                <span class="tg-categoryname">cleaning</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>2242</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-category">
                            <figure>
                                <img src="{{ asset ('/public/frontend/images/categories/img-06.png') }}" alt="image description">
                                <figcaption class="tg-computermobile">
                                <span class="lnr lnr-laptop tg-categoryicon"></span>
                                <span class="tg-categoryname">computer &amp; mobile services</span>
                                <a href="#" class="tg-themetag tg-tagjobcount">
                                    <i class="fa fa-clone"></i>
                                    <em>1206</em>
                                </a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="tg-btnbox">
                    <a class="tg-btn tg-btnviewall" href="#">view all</a>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
    Top Categories End
    *************************************-->
    <!--************************************
    Advantagies Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-bglight">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-sectiontitle">
                        <h2>Easiest Way To Get Services</h2>
                    </div>
                </div>
                <div class="tg-advantagies">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="tg-advantage tg-advantageplan">
                            <span class="tg-advantageicon">
                                <i class="tg-badge">1</i>
                                <em><img src="{{ asset ('/public/frontend/images/advantagies/img-01.png') }}" alt="image description"></em>
                            </span>
                            <div class="tg-title">
                                <h3><a href="#">Plan Your Task</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>Adipisicing elit sed dotas eiusmod incididunt utia labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="tg-advantage tg-advantagechoosebest">
                            <span class="tg-advantageicon">
                                <i class="tg-badge">2</i>
                                <em><img src="{{ asset ('/public/frontend/images/advantagies/img-02.png') }}" alt="image description"></em>
                            </span>
                            <div class="tg-title">
                                <h3><a href="#">Choose Best Service</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>Adipisicing elit sed dotas eiusmod incididunt utia labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="tg-advantage tg-advantagestressfree">
                            <span class="tg-advantageicon">
                                <i class="tg-badge">3</i>
                                <em><img src="{{ asset ('/public/frontend/images/advantagies/img-03.png') }}" alt="image description"></em>
                            </span>
                            <div class="tg-title">
                                <h3><a href="#">Live Stress Free</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>Adipisicing elit sed dotas eiusmod incididunt utia labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="tg-advantage tg-advantageexperience">
                            <span class="tg-advantageicon">
                                <i class="tg-badge">4</i>
                                <em><img src="{{ asset ('/public/frontend/images/advantagies/img-04.png') }}" alt="image description"></em>
                            </span>
                            <div class="tg-title">
                                <h3><a href="#">Share Your Experience</a></h3>
                            </div>
                            <div class="tg-description">
                                <p>Adipisicing elit sed dotas eiusmod incididunt utia labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
    Advantagies End
    *************************************-->
    <!--************************************
    Latest Services Provider Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
                    <div class="tg-sectionhead">
                        <div class="tg-sectiontitle">
                            <h2>Latest Service Providers</h2>
                        </div>
                        <div class="tg-description">
                            <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip extea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="tg-latestserviceproviders">
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-automotive">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-01.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Automotive</a>
                                <a class="tg-heart tg-liked" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-01.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">Bright Future Group &amp; Company</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-beautypersonalcare">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-02.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Beauty &amp; Personal Care</a>
                                <a class="tg-heart" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-02.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">On Fleek Spa &amp; Beauty Saloon</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-business">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-03.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Business</a>
                                <a class="tg-heart tg-liked" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-03.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">Blue Bird Organization</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-childcare">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-04.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Child Care</a>
                                <a class="tg-heart tg-liked" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-04.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">Silvana Hoggatt</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-cleaning">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-05.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Cleaning</a>
                                <a class="tg-heart tg-liked" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-05.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">Manchester Cleaning Service</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="tg-serviceprovider tg-computermobile">
                            <figure class="tg-featuredimg">
                                <img src="{{ asset ('/public/frontend/images/serviceproviders/img-06.jpg') }}" alt="image description">
                                <figcaption>
                                <a class="tg-themetag tg-categorytag" href="javascript:void(0);">Computer &amp; Mobile Service</a>
                                <a class="tg-heart tg-liked" href="javascript:void(0);"><i class="fa fa-heart"></i></a>
                                </figcaption>
                            </figure>
                            <div class="tg-serviceprovidercontent">
                                <div class="tg-companylogo"><a href="#"><img src="{{ asset ('/public/frontend/images/logos/img-06.png') }}" alt="image description"></a></div>
                                <div class="tg-companycontent">
                                    <ul class="tg-tags">
                                        <li><a class="tg-tag tg-featuredtag" href="#">featured</a></li>
                                        <li><a class="tg-tag tg-verifiedtag" href="#">verified</a></li>
                                    </ul>
                                    <div class="tg-title">
                                        <h3><a href="#">Eldridge Hemenway</a></h3>
                                    </div>
                                    <ul class="tg-matadata">
                                        <li><span class="tg-stars"><span></span></span></li>
                                        <li>
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <em>99% (1009 votes)</em>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
    Latest Services Provider End
    *************************************-->
    <!--************************************
    Testimonials Start
    *************************************-->
    <section class="tg-main-section tg-haslayout tg-bglight">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <figure class="tg-clientlargedp">
                        <img src="{{ asset ('/public/frontend/images/testimonials/img-01.jpg') }}" alt="image description">
                        <span class="tg-quotes"><i class="fa fa-quote-right"></i></span>
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="tg-testimonials">
                        <div id="tg-testimonialcontentslider" class="owl-carousel tg-testimonialcontentslider">
                            <div class="item">
                                <div class="tg-testimonial">
                                    <h2>Sandie Leveille</h2>
                                    <h3>A Truly Amazing Experience</h3>
                                <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-testimonial">
                                <h2>Sandie</h2>
                                <h3>A Truly Amazing Experience</h3>
                            <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tg-testimonial">
                            <h2>Sandie Leveille</h2>
                            <h3>A Truly Amazing Experience</h3>
                        <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="tg-testimonial">
                        <h2>Sandie</h2>
                        <h3>A Truly Amazing Experience</h3>
                    <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
                </div>
            </div>
            <div class="item">
                <div class="tg-testimonial">
                    <h2>Sandie Leveille</h2>
                    <h3>A Truly Amazing Experience</h3>
                <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
            </div>
        </div>
        <div class="item">
            <div class="tg-testimonial">
                <h2>Sandie</h2>
                <h3>A Truly Amazing Experience</h3>
            <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
        </div>
    </div>
    <div class="item">
        <div class="tg-testimonial">
            <h2>Sandie Leveille</h2>
            <h3>A Truly Amazing Experience</h3>
        <blockquote><q>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua eantnim adia minim veniam quis nostrud exercitation ullamco laboris.</q></blockquote>
    </div>
    </div>
    </div>
    <div id="tg-testimonialnavigationslider" class="owl-carousel tg-testimonialnavigationslider">
        <div class="item">
        <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-01.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-02.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-03.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-04.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-05.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-06.jpg') }}" alt="image description"></figure>
    </div>
    <div class="item">
    <figure><img src="{{ asset ('/public/frontend/images/testimonials/img-07.jpg') }}" alt="image description"></figure>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--************************************
    Testimonials End
    *************************************-->
    <!--************************************
    News & Posts Start
    *************************************-->
    <section class="tg-main-section tg-haslayout">
    <div class="container">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
    <div class="tg-sectionhead">
    <div class="tg-sectiontitle">
    <h2>News Articles &amp; Tips</h2>
    </div>
    <div class="tg-description">
    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip extea commodo consequat.</p>
    </div>
    </div>
    </div>
    <div class="tg-newsandposts">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <article class="tg-post">
    <figure class="tg-featuredimg">
    <a href="javascript:void(0);"><img src="{{ asset ('/public/frontend/images/post/img-01.jpg') }}" alt="image description"></a>
    </figure>
    <div class="tg-postcontent">
    <div class="tg-title">
    <h3><a href="#">Manchester Cleaning Service</a></h3>
    </div>
    <ul class="tg-postmatadata">
    <li>
    <a href="#">
    <i class="lnr lnr-user"></i>
    <span>BY: Tamika Darbonne</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lnr lnr-calendar-full"></i>
    <span>June 27, 2017</span>
    </a>
    </li>
    </ul>
    </div>
    </article>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <article class="tg-post">
    <figure class="tg-featuredimg">
    <a href="javascript:void(0);"><img src="{{ asset ('/public/frontend/images/post/img-02.jpg') }}" alt="image description"></a>
    </figure>
    <div class="tg-postcontent">
    <div class="tg-title">
    <h3><a href="#">Manchester Cleaning Service</a></h3>
    </div>
    <ul class="tg-postmatadata">
    <li>
    <a href="#">
    <i class="lnr lnr-user"></i>
    <span>BY: Tamika Darbonne</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lnr lnr-calendar-full"></i>
    <span>June 27, 2017</span>
    </a>
    </li>
    </ul>
    </div>
    </article>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <article class="tg-post">
    <figure class="tg-featuredimg">
    <a href="javascript:void(0);"><img src="{{ asset ('/public/frontend/images/post/img-03.jpg') }}" alt="image description"></a>
    </figure>
    <div class="tg-postcontent">
    <div class="tg-title">
    <h3><a href="#">Manchester Cleaning Service</a></h3>
    </div>
    <ul class="tg-postmatadata">
    <li>
    <a href="#">
    <i class="lnr lnr-user"></i>
    <span>BY: Tamika Darbonne</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lnr lnr-calendar-full"></i>
    <span>June 27, 2017</span>
    </a>
    </li>
    </ul>
    </div>
    </article>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
    <article class="tg-post">
    <figure class="tg-featuredimg">
    <a href="javascript:void(0);"><img src="{{ asset ('/public/frontend/images/post/img-04.jpg') }}" alt="image description"></a>
    </figure>
    <div class="tg-postcontent">
    <div class="tg-title">
    <h3><a href="#">Manchester Cleaning Service</a></h3>
    </div>
    <ul class="tg-postmatadata">
    <li>
    <a href="#">
    <i class="lnr lnr-user"></i>
    <span>BY: Tamika Darbonne</span>
    </a>
    </li>
    <li>
    <a href="#">
    <i class="lnr lnr-calendar-full"></i>
    <span>June 27, 2017</span>
    </a>
    </li>
    </ul>
    </div>
    </article>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--************************************
    News & Posts End
    *************************************-->
    @endsection