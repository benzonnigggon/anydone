<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include 'include/nav.php';
    ?>
    <div class="pricing-banner">
        <img src="images/pricing.webp" alt="">
        <h1>Price of <span>ONE</span> for the value of <span>FOUR.</span></h1>
        <p>A comprehensive and budget friendly pricing plan for the product with much more powerful features packed into ONE.</p>
        <div class="pricing-banner-btn">
            <button class="btn btn-primary">Try Now</button>
        </div>
        <div class="check-button">
            <ul>
                <li>Monthly</li>
                <li><input type="checkbox" id="checbox" onclick="check()" ; /></li>
                <li>Yearly</li>
            </ul>
        </div>
    </div>
    <div class="price-list">
        <div class="price-container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card price-hover">
                        <div class="price-title">
                            <h1>Free</h1>
                            <div class="price-subtitle">
                                <h2>$0</h2>
                                <h6>per user/month</h6>
                            </div>
                        </div>
                        <ul class="checkmark">
                            <li>15k messages are accessible</li>
                            <li>Apps integration - 10 apps</li>
                            <li>Companion mode for meetings</li>
                            <li>Calendar import/ export</li>
                        </ul>
                        <div class="getstarted">
                            <button class="btn getbtn">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card price-hover">
                        <div class="price-title">
                            <h1>Basic/Growth</h1>
                            <div class="price-subtitle">
                                <div class="text1">
                                    <h2>$10</h2>
                                    <h6>per user/month</h6>
                                </div>
                                <div class="text2">
                                    <h2>$15</h2>
                                    <h6>per user/month</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="checkmark">
                            <li>Everything under FREE </li>
                            <li>15 GB storage per user.</li>
                            <li>Apps integration - 15 apps</li>
                            <li>Personal assistant is available</li>
                            <li>Automatically calculate time slots for meetings.</li>
                            <li>Video calls with AR </li>
                        </ul>
                        <div class="getstarted">
                            <button class="btn getbtn">Get started</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- <div class="recommendation" style="position:absolute;">
                        <div class="card recommend">
                            <h6>Anydone Recommends</h6>
                        </div>
                    </div> -->
                    <div class="card price-hover">
                        <span>Anydone recommends</span>
                        <div class="price-title">
                            <h1>Standard/Pro</h1>
                            <div class="price-subtitle">
                                <div class="text1">
                                    <h2>$20</h2>
                                    <h6>per user/month</h6>
                                </div>
                                <div class="text2">
                                    <h2>$25</h2>
                                    <h6>per user/month</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="checkmark">
                            <li>Everything under Basic</li>
                            <li>Conference calls with upto 500 participants</li>
                            <li>Apps integration - 30 apps</li>
                            <li>Custom business email creation - max: 25</li>
                            <li>File sharing within and outside orgaization </li>
                            <li>Customizeable personal assistant.</li>
                            <li>Automated replies and ticket creation </li>
                        </ul>
                        <div class="getstarted">
                            <button class="btn getbtn">Get started</button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="card price-hover">
                        <div class="price-title">
                            <h1>Enterprise</h1>
                            <div class="price-subtitle">
                                <h6 class="contact" style="padding-top:55px;">Contact Sales </h6>
                            </div>
                        </div>
                        <ul class="checkmark">
                            <li>Everything under Standard</li>
                            <li>End-to-End Encrypted Calls and Messages</li>
                            <li>Apps integration - Unlimited apps</li>
                            <li>Global standard security compliance like HIPAA</li>
                            <li>Unlimited custom Bot creation</li>
                            <li>24/7 direct Enterprise-grade support </li>
                            <li>Dedicated customer success manager</li>
                        </ul>
                        <div class="getstarted">
                            <button class="btn getbtn">Get started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="package-details">
    <div class="pricing-list">
        <div class="pricing-title">
            <div class="row">
                <div class="col-3 price-left"><h5>Messaging and Calls</h5></div>
                <div class="col-2"><h6>Free</h6></div>
                <div class="col-2"><h6>Basic/Growth</h6></div>
                <div class="col-2"><h6>Standard/pro</h6></div>
                <div class="col-2"><h6>Enterprise</h6></div>
            </div>
        </div>
        <div class="white-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Messsage history</div>
                    <div class="col-2 left-border">15k messages </div>
                    <div class="col-2 left-border">Access all</div>
                    <div class="col-2 left-border">Access all</div>
                    <div class="col-2 left-border">Access all</div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Edit videos, add voiceover and share </div>
                    <div class="col-2 left-border">&#10003; </div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="white-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Audio recording </div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Screen recording with or without video</div>
                    <div class="col-2 left-border">&#10003; </div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="white-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Messages import from third party apps </div>
                    <div class="col-2 left-border"></div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Quick call</div>
                    <div class="col-2 left-border"></div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="white-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Video call</div>
                    <div class="col-2 left-border">Upto 2 members</div>
                    <div class="col-2 left-border">Upto 15 members</div>
                    <div class="col-2 left-border">Upto 35 members</div>
                    <div class="col-2 left-border">Unlimited members</div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Video calling with AR</div>
                    <div class="col-2 left-border"></div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="white-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Screen sharing </div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="pricing-subtitle">
                <div class="row row-height">
                    <div class="col-3 price-left">Code Sharing </div>
                    <div class="col-2 left-border"></div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                    <div class="col-2 left-border">&#10003;</div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'include/price-taskmanagement.php';
    ?>
    <?php
        include 'include/taskmngtprice.php';
    ?>
    <?php
        include 'include/automationprice.php';
    ?>
    <?php
        include 'include/adminprice.php';
    ?>
    <?php
        include 'include/storageprice.php';
    ?>
    <?php
        include 'include/supportprice.php';
    ?>
    </div>


    <!-- footer part -->

    <div class="footer">
        <div class="price-right-footer">
            <img class="cta-2 " src="images/CTAgirl-2.webp " alt=" ">
        </div>
        <div class="price-footer-text">
            <h1>A combination of powerful AI products in one single platform is definitely a cost effective solution.</h1>
            <div class="price-btn-center">
                <div class="buton-footer">
                    <button class="btn btn-footer-baner">Try Now</button>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'include/footer.php';
    ?>
    
    <script>
        function check() {
            var checkBox = document.getElementById("checbox");
            var text1 = document.getElementsByClassName("text1");
            var text2 = document.getElementsByClassName("text2");

            for (var i = 0; i < text1.length; i++) {
                if (checkBox.checked == true) {
                    text1[i].style.display = "block";
                    text2[i].style.display = "none";
                } else if (checkBox.checked == false) {
                    text1[i].style.display = "none";
                    text2[i].style.display = "block";
                }
            }
        }
        check();
    </script>
</body>
</html>