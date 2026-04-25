<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            color: #333;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* CENTERED HEADER SECTION */
        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 3px solid #2196F3;
            gap: 15px;
        }
        
        .header-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .header-info h1 {
            color: #2196F3;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        
        .contact-info {
            text-align: center;
            color: #666;
            font-size: 14px;
            line-height: 1.8;
        }
        
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #2196F3;
            object-position: center 40%;
        }
        
        .section {
            margin: 30px 0;
        }
        
        .section-title {
            color: #2196F3;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #2196F3;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }
        
        .section-content {
            padding-left: 10px;
        }
        
        .education-item, .work-item {
            margin: 15px 0;
            display: flex;
        }
        
        .date {
            width: 150px;
            color: #666;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .details {
            flex: 1;
        }
        
        .degree, .position {
            font-weight: bold;
            color: #333;
        }
        
        .school, .company {
            color: #666;
            margin: 3px 0;
        }
        
        .work-item ul {
            margin-top: 8px;
            padding-left: 20px;
        }
        
        .work-item li {
            margin: 5px 0;
            color: #555;
        }
        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
        }
        
        .skill-item {
            background: #e3f2fd;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: 500;
            color: #1976D2;
            border: 1px solid #2196F3;
        }
        
        .accomplishments-list {
            list-style: none;
        }
        
        .accomplishments-list li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }
        
        .accomplishments-list li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #2196F3;
            font-weight: bold;
        }
        
        .objective-text {
            line-height: 1.6;
            color: #555;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .education-item, .work-item {
                flex-direction: column;
            }
            .date {
                width: auto;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header with Profile Picture (CENTERED) -->
    <div class="header">
        <img src="profile.jpeg" alt="Profile Picture" class="profile-pic">
        <div class="header-info">
            <?php
            $firstname = "Virgilio, Jr.";
            $lastname = "Marquez";
            echo "<h1>" . $firstname . " " . $lastname . "</h1>";
            ?>
            <div class="contact-info">
                <?php
                $email = "vmmarquez@fit.edu.ph";
                $phone = "(555) 123-4567";
                $location = "Manila, Philippines";
                
                echo $location . "<br>";
                echo $phone . " - " . $email;
                ?>
            </div>
        </div>
    </div>

    <!-- Objective Section -->
    <div class="section">
        <div class="section-title">Portfolio Objective</div>
        <div class="section-content">
            <?php
            $objective = "Second-year IT student specializing in Web and Mobile Applications. Passionate about developing efficient web solutions and continuously learning new technologies. Seeking opportunities to apply programming skills in real-world projects while growing professionally.";
            echo "<p class='objective-text'>" . $objective . "</p>";
            ?>
        </div>
    </div>

    <!-- Education Section -->
    <div class="section">
        <div class="section-title">Education</div>
        <div class="section-content">
            <?php
            $edu1_date = "2024 - Present";
            $edu1_degree = "Bachelor of Science in Information Technology";
            $edu1_school = "FEU Institute of Technology - Manila";
            
            $edu2_date = "2023 - 2024";
            $edu2_degree = "Bachelor of Science in Civil Engineering (Transferred)";
            $edu2_school = "University of Santo Tomas - Manila";
            
            $edu3_date = "2021 - 2023";
            $edu3_degree = "Senior High School - STEM Strand";
            $edu3_school = "University of Batangas";

            echo "<div class='education-item'>";
            echo "<div class='date'>" . $edu1_date . "</div>";
            echo "<div class='details'>";
            echo "<div class='degree'>" . $edu1_degree . "</div>";
            echo "<div class='school'>" . $edu1_school . "</div>";
            echo "</div></div>";
            
            echo "<div class='education-item'>";
            echo "<div class='date'>" . $edu2_date . "</div>";
            echo "<div class='details'>";
            echo "<div class='degree'>" . $edu2_degree . "</div>";
            echo "<div class='school'>" . $edu2_school . "</div>";
            echo "</div></div>";

            echo "<div class='education-item'>";
            echo "<div class='date'>" . $edu3_date . "</div>";
            echo "<div class='details'>";
            echo "<div class='degree'>" . $edu3_degree . "</div>";
            echo "<div class='school'>" . $edu3_school . "</div>";
            echo "</div></div>";
            ?>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="section">
        <div class="section-title">Skills</div>
        <div class="section-content">
            <ul class="skills-list">
                <?php
                $skills = array(
                    "HTML/CSS",
                    "PHP",
                    "JavaScript",
                    "Database Management",
                    "Github",
                    "Python",
                    "Java",
                    "Sales and CRM Tools"
                );
                
                foreach($skills as $skill) {
                    echo "<li class='skill-item'>" . $skill . "</li>";
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- Work History Section -->
    <div class="section">
        <div class="section-title">Experience</div>
        <div class="section-content">
            <?php
            $work_date = "2024 - 2025";
            $work_role = "Digital Sales Representative";
            $work_company = "Confidential Digital Media Client";
            $work_desc_1 = "Optimized high-volume CRM workflows to optimize sales and personalize customer interactions";
            $work_desc_2 = "Crafted adaptive persuasive sales scripts based on individual customer preferences, driving higher conversion rates";

            echo "<div class='work-item'>";
            echo "<div class='date'>" . $work_date . "</div>";
            echo "<div class='details'>";
            echo "<div class='position'>" . $work_role . "</div>";
            echo "<div class='company'>" . $work_company . "</div>";
            echo "<ul>";
            echo "<li>" . $work_desc_1 . "</li>";
            echo "<li>" . $work_desc_2 . "</li>";
            echo "</ul></div></div>";
            ?>
        </div>
    </div>

    <!-- Accomplishments Section -->
    <div class="section">
        <div class="section-title">Accomplishments</div>
        <div class="section-content">
            <ul class="accomplishments-list">
                <?php
                $accomplishments = array(
                    "Graduated Senior High School with Consistent Honors award",
                    "3x recipient of Dean's Bronze Lister award in FEU Institute of Technology",
                    "Certiport certifications in Java, Python, Database Management, HTML/CSS, and JavaScript"
                );
                
                foreach($accomplishments as $item) {
                    echo "<li>" . $item . "</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>