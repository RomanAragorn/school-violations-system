<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP Gabay - Violation Overview</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,400;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body style="font-family: 'Roboto', sans-serif; background-color: #f9f9f9;">

    <!-- Header Section -->
    <div class="container-fluid py-3 shadow-sm" style="background-color: white; border-bottom: 8px solid #800000;">
        <div class="d-flex justify-content-between align-items-center px-lg-4">
            <div class="d-flex align-items-center gap-3">
                <div style="background-color: #800000; color: white; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                    <i class="fas fa-bookmark fa-lg"></i>
                </div>
                <div>
                    <h4 class="mb-0 fw-bold" style="color: #800000;">Violation Overview</h4>
                    <small class="text-muted">PUP Gabay - Violations & Sanctions</small>
                </div>
            </div>
            
            <div class="dropdown">
                <a href="{{ url('student-portal') }}" class="text-decoration-none" title="Go to Student Portal" style="color: #800000; font-size: 2.5rem;">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- University Branding -->
    <div class="container-fluid py-3 px-lg-5 bg-white">
        <div class="d-flex align-items-center gap-3">
            <img src="{{ asset('PUPLogo 1 Login.png') }}" alt="PUP Logo" style="height: 70px;">
            <div class="d-flex flex-column">
                <h5 class="mb-0 fw-bold" style="color: #800000; font-family: 'Roboto', sans-serif;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h5>
                <small style="font-family: 'Roboto Serif', serif; font-weight: 700; color: #555; font-size: 1.1rem;">
                    The Country's 1st PolytechnicU
                </small>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="container-fluid p-0 mb-4">
        <div id="pupCarousel" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#pupCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#pupCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#pupCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('PUP picture.png') }}" class="d-block w-100" alt="Slide 1" style="max-height: 600px; object-fit: contain; background-color: #e0e0e0;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('PUP_pic_2.jpg') }}" class="d-block w-100" alt="Slide 2" style="max-height: 600px; object-fit: contain; background-color: #e0e0e0;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('PUP_pic_3.jpg') }}" class="d-block w-100" alt="Slide 3" style="max-height: 600px; object-fit: contain; background-color: #e0e0e0;">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#pupCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-bs-target="#pupCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container pb-5">
        <div class="row">
            
            <!-- Content Area -->
            <div class="col-lg-9 col-md-8 pe-lg-4 order-2 order-md-1">
                
                <div class="tab-content" id="v-pills-tabContent">
                    
                    <!-- Overview Tab -->
                    <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel">
                        <h2 class="fw-bold mb-3" style="color: #800000;">Code of Conduct</h2>
                        <p class="lead fs-6 text-dark" style="line-height: 1.8;">
                            To ensure an atmosphere conducive to the pursuit of academic excellence and the formation of responsible
                            and productive Filipino citizens, as well as to maintain the order necessary for the common good, every PUP
                            student shall strictly abide by the following University rules and regulations.
                        </p>
                        <hr class="my-4">
                        <p class="text-muted">
                            <i class="fas fa-info-circle me-2"></i> Select a topic from the <strong>CONTENTS</strong> menu on the right to view the detailed policies.
                        </p>
                    </div>

                    <!-- Code of Conduct Tab -->
                    <div class="tab-pane fade" id="v-pills-conduct" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="fw-bold mb-0" style="color: #800000;">Code of Conduct (Full)</h2>
                            <button class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('overview-tab-trigger').click()">Back to Overview</button>
                        </div>
                        
                        <div style="height: 600px; overflow-y: auto; padding: 25px; background: white; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <h5 style="color: #800000; font-weight: 700; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px;">Section 1: Guidelines on Identification Card (ID)</h5>
                            <ul>
                                <li>1.1 Upon admission to the University, every PUP student is issued an official ID card which must be validated by the concerned College at the start of every term.</li>
                                <li>1.2 Students shall wear their ID conspicuously at all times while inside the campus.</li>
                            </ul>
                            
                            <h5 style="color: #800000; font-weight: 700; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px;">Section 2: Violations regarding ID and Registration</h5>
                            <p>A PUP student proven to have violated the foregoing rules on ID and registration certificate shall be subject to disciplinary measures.</p>
                            <ul>
                                <li>2.1 Failure to secure ID on time due to late filing of application;</li>
                                <li>2.2 Failure to bring validated ID and non-presentation of currently validated registration certificate at the Security Post;</li>
                                <li>2.3 Failure to conspicuously wear validated ID inside the Campus;</li>
                                <li>2.4 Loss of ID without justifiable cause;</li>
                                <li>2.5 Use of fake ID;</li>
                                <li>2.6 Use of non-validated ID;</li>
                                <li>2.7 Use of another person's ID; and</li>
                                <li>2.8 Lending of one's ID for use of another person.</li>
                            </ul>
                            
                            <h5 style="color: #800000; font-weight: 700; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px;">Section 3: Confiscation of ID</h5>
                            <p>In no case shall the ID be confiscated unless ordered by the Student Disciplinary Board (SDB).</p>
                            
                            <h5 style="color: #800000; font-weight: 700; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px;">Section 6: Prohibited Acts</h5>
                            <p>Every PUP student is prohibited from smoking, drinking alcoholic beverages, gambling, taking prohibited drugs, or engaging in any unlawful activity while inside the University premises.</p>
                            
                            <h5 style="color: #800000; font-weight: 700; margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 5px;">Section 14: Sanctions</h5>
                            <p>Students who violate these rules shall be meted with corresponding disciplinary measures as stated in Title 9 - Code of Discipline.</p>
                        </div>
                    </div>

                    <!-- Code of Discipline Tab -->
                    <div class="tab-pane fade" id="v-pills-discipline" role="tabpanel">
                         <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="fw-bold mb-0" style="color: #800000;">Code of Discipline</h2>
                            <button class="btn btn-sm btn-outline-secondary" onclick="document.getElementById('overview-tab-trigger').click()">Back to Overview</button>
                        </div>

                        <div style="height: 600px; overflow-y: auto; padding: 25px; background: white; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                            <p><strong>Section 1.</strong> Student offenses shall be subjected to disciplinary measures by the University.</p>
                            <hr>

                            <h6>3.1 Not having the ID validated</h6>
                            <div style="background-color: #fff5f5; border-left: 4px solid #800000; padding: 10px 15px; margin-top: 10px; margin-bottom: 20px; font-size: 0.9rem;">
                                <strong>1st Offense:</strong> Warning slip to student; Parent/Guardian informed.<br>
                                <strong>2nd Offense:</strong> One (1) week suspension.<br>
                                <strong>3rd Offense:</strong> Two (2) weeks suspension.<br>
                                <strong>More than 3 Offenses:</strong> One (1) month suspension.
                            </div>

                            <h6>3.2 Not wearing ID / No SES</h6>
                            <div style="background-color: #fff5f5; border-left: 4px solid #800000; padding: 10px 15px; margin-top: 10px; margin-bottom: 20px; font-size: 0.9rem;">
                                <strong>1st Offense:</strong> Warning slip; Parent/Guardian informed.<br>
                                <strong>2nd Offense:</strong> One-week suspension.<br>
                                <strong>3rd Offense:</strong> Two-week suspension.<br>
                                <strong>More than 3 Offenses:</strong> One-month suspension.
                            </div>
                            
                            <h6>3.15 Smoking (Including Vape/E-cig)</h6>
                            <div style="background-color: #fff5f5; border-left: 4px solid #800000; padding: 10px 15px; margin-top: 10px; margin-bottom: 20px; font-size: 0.9rem;">
                                <strong>1st Offense:</strong> One-week suspension.<br>
                                <strong>2nd Offense:</strong> One-month suspension.<br>
                                <strong>3rd Offense:</strong> One-semester suspension.<br>
                                <strong>4th+:</strong> Dismissal.
                            </div>

                            <h6>3.30 Dishonesty / Cheating / Plagiarism</h6>
                            <div style="background-color: #fff5f5; border-left: 4px solid #800000; padding: 10px 15px; margin-top: 10px; margin-bottom: 20px; font-size: 0.9rem;">
                                <strong>1st Offense:</strong> Failing grade in exam/quiz.<br>
                                <strong>2nd Offense:</strong> Failing grade in course.<br>
                                <strong>3rd Offense:</strong> Dismissal.
                            </div>

                            <h6>3.31 Deadly Weapons</h6>
                            <div class="text-danger" style="background-color: #fff5f5; border-left: 4px solid #800000; padding: 10px 15px; margin-top: 10px; margin-bottom: 20px; font-size: 0.9rem;">
                                <strong>Dismissal and filing of criminal case.</strong>
                            </div>
                            
                            <p class="mt-4 small text-muted"><em>*Scroll to view all sanctions.</em></p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar Navigation -->
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0 order-1 order-md-2">
                <div style="color: #800000; font-weight: bold; text-transform: uppercase; margin-bottom: 10px; font-family: 'Roboto', sans-serif; letter-spacing: 0.5px;">CONTENTS</div>
                
                <div class="nav nav-pills flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    
                    <button class="nav-link active d-none" 
                            id="overview-tab-trigger"
                            data-bs-toggle="pill" 
                            data-bs-target="#v-pills-overview" 
                            type="button">Hidden Overview</button>

                    <button class="nav-link text-start" 
                            id="v-pills-conduct-tab" 
                            data-bs-toggle="pill" 
                            data-bs-target="#v-pills-conduct" 
                            type="button" role="tab"
                            style="color: #333; border-bottom: 1px solid #ddd; border-radius: 0; padding: 12px 0; font-weight: 500; background: transparent;">
                        Code of Conduct
                    </button>
                    
                    <button class="nav-link text-start" 
                            id="v-pills-discipline-tab" 
                            data-bs-toggle="pill" 
                            data-bs-target="#v-pills-discipline" 
                            type="button" role="tab"
                            style="color: #333; border-bottom: 1px solid #ddd; border-radius: 0; padding: 12px 0; font-weight: 500; background: transparent;">
                        Code of Discipline
                    </button>
                    
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>