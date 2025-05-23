
<style>
    /* ---------- SERVICE CARD STYLING ---------- */
    .service-card-wrapper {
        position: relative;
        padding: 5px;
        border-radius: 12px;
        background: transparent;
        transition: all 0.3s ease-in-out;
    }

    /* Default Card Style */
    .service-card {
        background: #ffffff;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
        min-height: 320px; /* Fixed Height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 25px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Card Hover Effects */
    .service-card-wrapper:hover {
        background: linear-gradient(135deg, #E74C3C, #FC5C7D);
        padding: 5px;
        border-radius: 12px;
        transform: translateY(-8px);
        box-shadow: 0 15px 25px rgba(231, 76, 60, 0.3);
    }

    .service-card-wrapper:hover .service-card {
        transform: scale(1.05);
        box-shadow: 0 20px 30px rgba(252, 92, 125, 0.3);
    }

  /* Icon Circle */
.icon-circle {
    background: #ffffff; /* Clean white background */
    padding: 8px;
    border-radius: 12px; /* Soft rounded edges */
    display: inline-block;
    margin-bottom: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Soft shadow for better visibility */
    transition: transform 0.3s ease-in-out, background 0.3s ease-in-out;
}

/* Icon Image */
.icon-circle img {
    width: 50px; /* Adjust size for better fit */
    height: 50px;
    object-fit: contain;
}

/* Icon Hover Animation */
.service-card-wrapper:hover .icon-circle {
    transform: scale(1.1);
    background: #f5f5f5; /* Subtle grey on hover */
}

    /* Heading & Text Styling */
    .service-card h5 {
        font-size: 1.2rem;
        color: #2C3E50;
        margin-bottom: 10px;
        transition: color 0.3s ease-in-out;
    }

    /* ✅ FIXED: Keep description visible */
    .service-card p {
    font-size: 0.95rem;
    color: #666;
    height: 180px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    padding: 0 10px;
    transition: none;
}
    .service-card-wrapper:hover h5 {
        color: #ffffff;
    }


.quotation-form .form-control {
    background: #fff;
    color: #333;
    border: 1px solid #ccc;
    padding: 12px;
    border-radius: 5px;
    font-size: 16px;
    transition: 0.3s;
}

.quotation-form .form-control::placeholder {
    color: #777;
}

.quotation-form .form-control:focus {
    border-color: red;
    outline: none;
    box-shadow: 0 0 8px rgba(255, 0, 0, 0.3);
}

.btn-submit {
    background: red;
    color: white;
    padding: 12px 25px;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    width: 100%;
    max-width: 250px;
}

.btn-submit:hover {
    background: darkred;
}

/* Small screen adjustments */

/* Responsive tweaks for smaller devices */
@media (max-width: 768px) {
    .quotation-form {
        padding: 0 15px;
    }

    .quotation-form .form-control,
    .quotation-form .form-select {
        width: 100%;
        font-size: 15px;
        padding: 10px 12px;
    }

    .quotation-form textarea {
        font-size: 15px;
        padding: 10px 12px;
    }

    .quotation-form label {
        font-size: 15px;
        margin-bottom: 5px;
        display: inline-block;
    }

    .quotation-form .row > div {
        margin-bottom: 15px;
    }

    .btn-submit {
        width: auto;
        font-size: 16px;
        padding: 10px 20px;
    }

    #successMsg {
        font-size: 15px;
    }}


#myform {
    scroll-margin-top: 80px; /* Adjust this value as needed */
}
ul.text-muted li {
    padding-left: 1rem;
    text-indent: -0.8rem;
}

 </style>

<div class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold text-dark position-relative d-inline-block">
       <span class=" blog-title">Creative Solution</span> We Provide
        </h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Laravel Service Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/idsb.svg') }}" alt="Laravel Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">Graphics Design</h5>

                    <p class="card-text text-muted">
                        We lead you to obtain your marketing goal after discussion and essential initiatives.
                         We make R&D and reports to make sure the workflow.
                    </p>
                </div>
            </div>
        </div>

        <!-- Web Hosting Service Card -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">Motion Graphics</h5>
                    <p class="card-text text-muted">
                        We play role as your marketing representatives and always try to make sure
                        to extract the best result from your business to develop it for
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="service-card-wrapper">
                <div class="card service-card">
                    <div class="icon-circle">
                        <img src="{{ asset('assets/images/idsb.svg') }}" alt="Web Hosting Logo" class="img-fluid">
                    </div>
                    <h5 class="card-title text-dark">Video Editing</h5>
                    <p class="card-text text-muted">
                        Trying to stand on your brand? We have vast experience and are always planning out of box
                        to execute the branding of yours smoothly.
                </div>
            </div>
        </div>

    </div>
</div>

<div style="background: #f5f5f5;">
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
            <h2 class="fw-bold text-danger">We Provide Clients Modern Innovative Solution</h2>
            <div class="col-lg-12 text-center mt-5">  <!-- Added mt-5 here -->
                <img src="{{ asset('assets/images/crs2.jpeg') }}" alt="Web Development" class="img-fluid w-75">
            </div>

        </div>
         <!-- Right Section - Timeline -->
         <div class="col-lg-6">
            <div class="timeline">
                <!-- Idea -->
                <div class="timeline-item">
                    <h5 class="timeline-title">💡 Idea</h5>
                    <p class="timeline-text">We start with your vision and turn it into a structured plan.</p>
                </div>
                <!-- Support -->
                <div class="timeline-item">
                    <h5 class="timeline-title">🔧 Support</h5>
                    <p class="timeline-text">We provide continuous support to ensure your website runs seamlessly.</p>
                </div>
                <!-- Trust -->
                <div class="timeline-item">
                    <h5 class="timeline-title">🤝 Trust</h5>
                    <p class="timeline-text">We build long-term relationships with clients based on trust and reliability.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



{{-- form --}}
<div id="myform">
    <div class="container" style="padding: 50px 0">
        <h2 class="text-center text-dark fw-bold mb-4">
            Book <span style="color: red;">Order</span>
        </h2>

        <form id="quotationForm" class="quotation-form">
            <div class="row">
                <div class="col-md-6 col-12 mb-3">
                    <input type="text" id="name" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <input type="email" id="email" class="form-control" placeholder="Email Address" oninput="validateEmail()">
                    <small id="emailError" class="text-danger" style="display: none;">⚠ Invalid email format!</small>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <input type="text" id="contact" class="form-control" placeholder="Contact No">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <select id="company" class="form-select">
                        <option value="" selected disabled>-- Select Company Type --</option>
                        <option value="New Business">New Business</option>
                        <option value="Start Up">Start Up</option>
                        <option value="Company">Company</option>
                        <option value="Great Idea">Great Idea</option>
                    </select>

                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label class="text-dark fw-bold">Service Type</label>
                    <select id="websiteType" class="form-select">
                        <option value="" selected disabled>-- Select Service Type --</option>
                        <option value="Graphics Design">Graphics Design</option>
                        <option value="Motion Graphics">Motion Graphics</option>
                        <option value="Video Editing">Video Editing</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <label class="text-dark fw-bold">Example(Optional)</label>
                    <input type="text" id="exampleWebsite" class="form-control" placeholder="Example Website Link">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-dark fw-bold">Description</label>
                    <textarea id="description" class="form-control" rows="4" placeholder="Describe your requirements..."></textarea>
                </div>
                <div class="col-12 text-center">
                    <div class="col-12 text-center d-flex justify-content-center align-items-center gap-3">
                        <button type="button" class="btn-submit d-flex justify-content-center align-items-center gap-2" id="submitBtn" onclick="submitForm()">
                            <span id="spinner" class="spinner-border spinner-border-sm text-light" role="status" style="display: none;"></span>
                            <span id="submitText">Submit</span>
                        </button>

                        <span id="successMsg" class="fw-semibold" style="display: none;"></span>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function validateEmail() {
        let email = document.getElementById("email").value.trim();
        let emailError = document.getElementById("emailError");

        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        emailError.style.display = email.match(emailPattern) ? "none" : "block";
    }

    function showInlineMessage(message, isSuccess = true) {
    const successMsg = document.getElementById("successMsg");
    successMsg.textContent = message;
    successMsg.style.display = "inline";
    successMsg.className = isSuccess
        ? "text-success fw-semibold ms-3"
        : "text-danger fw-semibold ms-3";

    setTimeout(() => {
        successMsg.style.display = "none";
    }, 1000);
}

async function submitForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const contact = document.getElementById("contact").value.trim();
    const company = document.getElementById("company").value.trim();
    const serviceType = document.getElementById("websiteType").value.trim();
    const exampleWebsite = document.getElementById("exampleWebsite").value.trim();
    const description = document.getElementById("description").value.trim();
    const emailError = document.getElementById("emailError").style.display;

    const spinner = document.getElementById("spinner");
    const submitBtn = document.getElementById("submitBtn");

    // Show spinner
    spinner.style.display = "inline-block";

    // Validate fields
    if (
        name === "" || email === "" || contact === "" || company === "" ||
        serviceType === "" || description === "" || emailError === "block"
    ) {
        showInlineMessage("❌ Please fill out all required fields!", false);
        spinner.style.display = "none";
        return;
    }

    try {
        const response = await axios.post('/service-booking', {
            name,
            email,
            contact,
            company,
            service_type: serviceType,
            example_website: exampleWebsite,
            description
        });

        if (response.data.success) {
            document.getElementById("quotationForm").reset();
            showInlineMessage("✅ Sent!", true);
        } else {
            showInlineMessage("❌ Something went wrong!", false);
        }
    } catch (error) {
        showInlineMessage("❌ Failed to submit the form!", false);
        console.error(error);
    } finally {
        spinner.style.display = "none";
    }
}

</script>

