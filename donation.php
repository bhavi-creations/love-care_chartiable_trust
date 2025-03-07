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





<!-- <section>
  
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
                        QR Code Display (Hidden Initially)
                        <div id="qrCodeContainer" style="display: none; margin-top: 20px; text-align: center;">
                            <p>Scan the QR code to donate</p>
                            <img id="qrCode" src="" alt="QR Code" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->

<!-- <section>
  
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
                        QR Code Display (Hidden Initially)
                        <div id="qrCodeContainer" style="display: none; margin-top: 20px; text-align: center;">
                            <p>Scan the QR code to donate</p>
                            <img id="qrCode" src="" alt="QR Code" style="width: 200px; height: 200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> -->







<section>
    <section class="donate_image">
        <div class="container py-5">
            <div class="row">
                <h1 class="text-center my-5">Donate</h1>

                <div class="donate-content">
                        
                    </div>
                <div class="col-12 col-md-6 ">
                    <p>
                        Your donation transforms lives. When you contribute to our charitable trust, you're directly supporting programs that provide education, healthcare, and essential community services. Every gift—whether it's a one-time contribution or a recurring donation—helps us address pressing challenges and build a better future. </p>
                    <p>
                        We ensure your support is managed with complete transparency and accountability. Detailed reports and regular updates show exactly how your donation is making an impact, while our secure process protects your personal and financial information. In addition, your generosity may also offer tax benefits, further enhancing the value of your contribution. </p>

                    <p>
                        When you choose to donate, you're supporting initiatives that provide education, healthcare, and essential services to those in need. Every contribution, regardless of size, plays a vital role in building a stronger, more resilient community.
                    </p>

                    <p>
                        By donating, you become part of a movement dedicated to empowering individuals and uplifting entire communities. Your support helps create opportunities, fuels innovation, and drives sustainable change.
                    </p>


                </div>
                <div class="col-12 col-md-6">
                    <div class="donae_content">
                        <h2>Payment Details</h2>
                        <form id="donationForm">
                            <label for="amount">Amount (INR):</label>
                            <input type="number" id="amount" name="amount" placeholder="Enter donation amount" required>

                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>

                            <label for="mobile">Mobile Number:</label>
                            <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number" required>

                            <div class="button-group">
                                <button type="button" id="donateBtn">Donate</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
</section>


  </style>
</head>
<body>

<section>
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-3 bank-card">
          <div class="card-header text-center">
            <h1>Our Bank Detail</h1>
            <h3>Love and Care Charitable Trust</h3>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="bank">Bank:</label>
                <input type="text" class="form-control" id="bank" value="Union bank of India" readonly>
              </div>
              <div class="form-group">
                <label for="account">Account No:</label>
                <input type="text" class="form-control" id="account" value="181121010000057" readonly>
              </div>
              <div class="form-group">
                <label for="ifsc">IFSC Code:</label>
                <input type="text" class="form-control" id="ifsc" value="UBIN0918113" readonly>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Optional Bootstrap JS dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById("donateBtn").addEventListener("click", function() {
        // Retrieve values from the form
        var amount = document.getElementById("amount").value;
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var mobile = document.getElementById("mobile").value;

        // Basic validation
        if (!amount || !name || !email || !mobile) {
            alert("Please fill in all fields.");
            return;
        }

        // Convert amount to paise (Razorpay requires the amount in the smallest currency unit)
        var amountInPaise = parseFloat(amount) * 100;

        // Prepare Razorpay options
        var options = {
            "key": "YOUR_RAZORPAY_KEY", // Replace with your Razorpay API Key
            "amount": amountInPaise,
            "currency": "INR",
            "name": "Charitable Trust",
            "description": "Donation Payment",
            "image": "https://yourwebsite.com/logo.png", // Optional: Your logo URL
            "handler": function(response) {
                // Handle successful payment here
                alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
                // Redirect to thank you page or process further
                window.location.href = "thank-you.php";
            },
            "prefill": {
                "name": name,
                "email": email,
                "contact": mobile
            },
            "theme": {
                "color": "#007bff"
            }
        };

        // Open Razorpay checkout
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });
</script>




<?php include 'footer.php'; ?>