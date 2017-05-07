<?php include ('includes/sess.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Help | Elegant Resume</title>
  <?php include ('includes/fav.php') ?>

  <?php include ('includes/top_imports.php') ?>


</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">

    <?php include ('includes/menu.php') ?>

    <?php include ('includes/top_nav.php') ?>

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Help</h3>
          </div>

          <div class="title_right" style="display: none">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Searching for...">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go</button>
                    </span>
              </div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" id="basic">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Basic Info</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>Firstly, the focus should be on presenting your skills and personality traits but at the same time
                    remember that it is important not to lie or exaggerate the abilities that you do not posses. </p>
                  <p>Always keep in mind that sometimes <b>“Less, Is More!”</b></p>
                  <br>
                  <p class="p-near-ul">The first part of your résumé is the Header which needs to include the following
                    information:</p>
                  <ul>
                    <li><p><b>Picture</b>: Pick a professional picture, resize or crop it as necessary after uploading</p></li>
                    <li><p><b>Name</b>: Not your username, your actual name</p></li>
                    <li><p><b>Country</b>: Listing your Country is mandatory. This is especially needed when your
                        application is being scanned by an ATS software.</p></li>
                    <li><p><b>Email Address</b>: your email should be just your name or some professional variations of
                        it.</p></li>
                    <li><p><b>Phone Number</b>: make sure to write the number where you are available most of the time.
                      </p></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="edu">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Education</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  In case you are a student, recent graduate or do not have any work experience, we suggest to highlight the “Education” section at the top of your résumé instead of Work Experience. Remember to arrange this section in reverse order. If, for example, you have a Master’s and a Bachelor's Degree, make sure that you list first your Master’s Degree. If you already have a Bachelor’s Degree, you should not include your High School details.

                  Include the Universities/Colleges/Academies/Schools, the name of the program and the courses that you took and are relevant to the position you are applying for.
                  Do NOT falsify anything when it comes to your education. It comes without saying, that if you exaggerate or lie about it, somebody will eventually notice it.

                  <p class="p-near-ul">The mandatory information for this section is: </p>
                  <ul>
                    <li>Name of the School</li>
                    <li>Degree</li>
                    <li>Area of Study</li>
                    <li>Time line</li>
                  </ul>

                  <p>
                    <strong>Action on School Names:</strong>
                    <ul>
                      <li>Action Button Title: Tooltip that will appear when someone hover on the School Name </li>
                      <li>Action Button Url: The url someone will be redirected to on clicking the School Name </li>
                    </ul>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="exp">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Experience</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>The most important section of your résumé should be Work Experience in the case you have a couple of years of
                    related work experience for the job you are applying for.</p>
                  <p class="p-near-ul">The mandatory information for this section is: </p>
                  <ul>
                    <li>Name of the Company/Organisation</li>
                    <li>Employment Period</li>
                    <li>Position/Title/Role </li>
                  </ul>
                  <p>Optionally you can add Accomplishments/Responsibilities or Tasks tags or write them in the description field.</p></li></p>
                  <p>
                    <strong>Action on Company Names:</strong>
                  <ul>
                    <li>Action Button Title: Tooltip that will appear when someone hover on the Company Name </li>
                    <li>Action Button Url: The url someone will be redirected to on clicking the Company Name </li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="pro">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Projects</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>The is another important section of your résumé in the case you have a couple of years of
                    related work experience for the job you are applying for.</p>
                  <p class="p-near-ul">The mandatory information for this section is: </p>
                  <ul>
                    <li>Title of your project</li>
                    <li>Employment Period</li>
                    <li>Your role in this project</li>
                  </ul>
                  <p>Optionally you can add Skill or other tags to label the tools/equipments/methodology you used in this project.</p></li></p>
                  <p>
                    Include the most important personal project that you have worked on. These could be semester projects or projects that you worked on in your own free time.
                    List the name of the project, a short description of what the project was about, what kind of knowledge did you apply, and what skills did you develop while working on it.
                  </p>

                  <p>
                    <strong>Action on Project Names:</strong>
                  <ul>
                    <li>Action Button Title: Tooltip that will appear when someone hover on the Project Name </li>
                    <li>Action Button Url: The url someone will be redirected to on clicking the Project Name </li>
                  </ul>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row" id="pub">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Publications</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>You can add your published works/papers/patents in this section.</p>
                  <p>Mandatory fields are:</p>
                  <ul>
                    <li>Name of the publication</li>
                    <li>Co-others</li>
                    <li>Date</li>
                  </ul>
                  <p>
                    <strong>Action on Publication Names:</strong>
                  <ul>
                    <li>Action Button Title: Tooltip that will appear when someone hover on the Publication Name </li>
                    <li>Action Button Url: The url someone will be redirected to on clicking the Publication Name </li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="hon">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Honors</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>You can add honors/achievements/certifications in this section. This will give the audience a better idea about you.</p>
                  <p>Mandatory fields are:</p>
                  <ul>
                    <li>Name of the honor</li>
                    <li>The name of the Issuer</li>
                    <li>Date</li>
                  </ul>
                  <p>List all your important Achievements and Certificates that you have obtained and are to some extent
                    related to the job you are applying for. </p>
                  <p class="p-near-ul"><i>Examples of Achievements: </i></p>
                  <ul>
                    <li>Employee of the Month - January and March 2016</li>
                    <li>Nominated as a team leader in various projects across 3 departments.</li>
                    <li>Certified Professional Crisis Manager for ISO 292 Security Management (2011)</li>
                    <li>Machine Learning course at Coursera (2016)</li>
                  </ul>

                  <p>
                    <strong>Action on Achievement:</strong>
                  <ul>
                    <li>Action Button Title: Tooltip that will appear when someone hover on the Achievement </li>
                    <li>Action Button Url: The url someone will be redirected to on clicking the Achievement </li>
                  </ul>
                  </p>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="row" id="act">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Activities</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p>For the recent graduates with minimal or no work experience there should be an emphasis on this
                    section, even make volunteerism a central part of your résumé.</p>
                  <p>This section can highlight important skills, such as Communication, Leadership, and Planning while
                    showing as well that you are adaptable and self-motivated. </p>
                  <p>You can also research the employer and see what causes they care about, then mirror those in your
                    volunteer experience if you had related experiences. </p>

                  <p>
                    <strong>Action on Activity Names:</strong>
                  <ul>
                    <li>Action Button Title: Tooltip that will appear when someone hover on the Activity Name </li>
                    <li>Action Button Url: The url someone will be redirected to on clicking the Activity Name </li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row" id="social">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Social</h2>
                <a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-12 col-lg-12 col-sm-12">
                  <p><b>Social Media Profiles</b>: The social media icons will appear on your resume and the user will be redirected to the url you provide in this page. Make an audit of your social media profiles and be sure you do
                        not have any content that might create a bad impression about you.</p>
                  <p>
                    We currently support following social media hyperlinks:
                    <ul>
                      <li>LinkedIn</li>
                      <li>Twitter</li>
                      <li>Github</li>
                      <li>Facebook</li>
                      <li>Google</li>
                      <li>Skype</li>
                      <li>Flickr</li>
                      <li>Instagram</li>
                      <li>Tumblr</li>
                      <li>Youtube</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /page content -->

    <?php include ('includes/footer.php') ?>
  </div>
</div>

<?php include ('includes/bottom_imports.php') ?>

</body>
</html>
