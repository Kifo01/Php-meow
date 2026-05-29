<?php
$title = "Personal Information";
require('sa2_header.php');
?>

<div class="resume-section">
    <h2>Personal Information</h2>
    
    <div style="display:grid; grid-template-columns: 1fr 2fr; gap:30px; align-items:start;">

        <div style="text-align:center;">
            <img src="me.jpg" alt="Profile Photo" class="profile-pic-large">
        </div>
        
        <!-- Personal Details -->
        <div class="info-table-container">
            <table style="width:100%;">
                <tr>
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5; width:150px;">Full Name:</td>
                    <td style="padding:10px;">Virgilio M. Marquez Jr.</td>
                </tr>
                <tr style="background:#f0f4f8;">
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Address:</td>
                    <td style="padding:10px;">Manila, Philippines</td>
                </tr>
                <tr>
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Contact Number:</td>
                    <td style="padding:10px;">(63) 9563082850</td>
                </tr>
                <tr style="background:#f0f4f8;">
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Email Address:</td>
                    <td style="padding:10px;">vmmarquez@fit.edu.ph</td>
                </tr>
                <tr>
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Nationality:</td>
                    <td style="padding:10px;">Filipino</td>
                </tr>
                <tr style="background:#f0f4f8;">
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Date of Birth:</td>
                    <td style="padding:10px;">January 16, 2005</td>
                </tr>
                <tr>
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Gender:</td>
                    <td style="padding:10px;">Male</td>
                </tr>
                <tr style="background:#f0f4f8;">
                    <td style="padding:10px; font-weight:bold; color:#4a6fa5;">Civil Status:</td>
                    <td style="padding:10px;">Single</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php require('sa2_footer.php'); ?>