<?php include 'header.php'; ?>


<!-- Nav Bar End -->


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Donation</h2>
            </div>
            <div class="col-12">
                <a href="index.php">Home</a>
                <a href="">Donation</a>
            </div>
        </div>
    </div>
</div>





<section>
    <!-- Donate Start -->
    <div class="donate" data-parallax="scroll" data-image-src="img/donate.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p>Donate Now</p>
                            <h2>Let's donate to needy people for better lives</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                Donating is more than just giving money—it’s about making a difference in someone’s life. Whether it's supporting education, healthcare, disaster relief, or community development, every contribution helps bring positive change.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form">
                        <form id="donationForm">
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" id="donorName" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" id="donorEmail" />
                            </div>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-custom active">
                                    <input type="radio" name="amount" value="10" checked> 100
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="amount" value="20">200
                                </label>
                                <label class="btn btn-custom">
                                    <input type="radio" name="amount" value="30">500
                                </label>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Donate Now</button>
                            </div>
                        </form>
                        <!-- QR Code Display (Hidden Initially) -->
                        <div id="qrCodeContainer" style="display: none; margin-top: 20px; text-align: center;">
                            <p>Scan the QR code to donate</p>
                            <img id="qrCode" src="" alt="QR Code" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->
</section>
<?php include 'footer.php'; ?>