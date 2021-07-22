<?php
    $site_width = get_theme_mod( 'site_width' );
?>




  <nav id="universal-header">
    <div class="container<?php if ($site_width == "full-width") { ?>-fluid<?php }; ?>">
    <ul class="row justify-content-between list-inline mb-0">
      <li class="col-auto list-inline-item me-md-auto"><small><a href="https://www.utk.edu" class="nav-link text-light text-uppercase text-center text-lg-left">www.utk.edu</a></small></li>
      <li class="col-auto"><small><a href="https://apply.utk.edu" class="nav-link px-0 text-light text-uppercase">Apply</a></small></li>
      <li class="col-auto"><small><a href="https://visit.utk.edu" class="nav-link px-0 text-light text-uppercase">Visit</a></small></li>
      <li class="col-auto"><small><a href="https://giveto.utk.edu" class="nav-link px-0 text-light text-uppercase">Give</a></small></li>
      <li class="col-auto"><small><a href="https://my.utk.edu" class="nav-link px-0 text-light text-uppercase">myUTK</a></small></li>
    </ul>
    </div>
  </nav>



<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  
        <!--<form method="GET" action="//google.tennessee.edu/search" class="form-inline hidden-print">-->
		<!-- Uncomment to use API search form -->
		<!-- <form class="form-inline hidden-print">
          <div class="mb-3 input-group">
            <label class="sr-only visually-hidden" for="q">Search</label>
            <input type="text" class="form-control" title="Search utk.edu" placeholder="Search utk.edu" name="q" id="q">
			<button type="button" name="btnG" class="btn btn-outline-secondary" onClick="search_submission()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg><span class="visually-hidden">Submit</span></button>
          </div>
        </form>-->
		  
		<!-- CSE Element form -->
		<form class="form-inline hidden-print" id="cse-searchbox-form">
          <div class="mb-3 input-group">
            <label class="sr-only visually-hidden" for="q">Search</label>
            <input type="text" class="form-control" title="Search utk.edu" placeholder="Search utk.edu" name="q" id="q">
            <button type="submit" name="btnG" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg><span class="visually-hidden">Submit</span></button>
          </div>
        </form>
		  
		  <!-- Uncomment to use API results -->
		  <!--<div id="gs_results"></div>-->
		  
		  <!-- CSE results in columns -->
		  <!--<div class="container">
  			<div class="row">
    			<div class="col-4">
      				<h2>This Site</h2>
					<div class="gcse-searchresults-only" data-gname="this-site-results"></div>
    			</div>
    			<div class="col-4">
      				<h2>All of UTK.edu</h2>
					<div class="gcse-searchresults-only" data-gname="all-utk-results"></div>
    			</div>
    			<div class="col-4">
      				<h2>Events</h2>
					<div class="gcse-searchresults-only" data-gname="events-results"></div>
    			</div>
  			</div>
		</div>-->
		  
		<!-- CSE results in tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
  			<li class="nav-item" role="presentation">
    			<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">This Site</button>
  			</li>
  			<li class="nav-item" role="presentation">
    			<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All of UTK.edu</button>
  			</li>
  			<li class="nav-item" role="presentation">
    			<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Faculty</button>
  			</li>
  			<li class="nav-item" role="presentation">
    			<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Events</button>
  			</li>
		</ul>

		<div class="tab-content">
  			<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="gcse-searchresults-only" data-gname="this-site-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
			</div>
  			<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="gcse-searchresults-only" data-gname="all-utk-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
			</div>
  			<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				<div class="gcse-searchresults-only" data-gname="faculty-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
			</div>
  			<div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
				<div class="gcse-searchresults-only" data-gname="events-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
			</div>
		</div>
		  
        <!--<ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">This Site</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All of UTK.edu</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class="h6"><a href="#">Test Score Policy | Undergraduate Admissions</a></p>
            <p>The University of Tennessee has decided to make standardized test scores optional for the 2021 application. Students* can select to include or not include their ...</p> 
            <p class="h6"><a href="#">Test Score Policy | Undergraduate Admissions</a></p>
            <p>The University of Tennessee has decided to make standardized test scores optional for the 2021 application. Students* can select to include or not include their ...</p> 
            <p class="h6"><a href="#">Test Score Policy | Undergraduate Admissions</a></p>
            <p>The University of Tennessee has decided to make standardized test scores optional for the 2021 application. Students* can select to include or not include their ...</p> 
            <p class="h6"><a href="#">Test Score Policy | Undergraduate Admissions</a></p>
            <p>The University of Tennessee has decided to make standardized test scores optional for the 2021 application. Students* can select to include or not include their ...</p> 
            <p class="h6"><a href="#">Test Score Policy | Undergraduate Admissions</a></p>
            <p>The University of Tennessee has decided to make standardized test scores optional for the 2021 application. Students* can select to include or not include their ...</p> 
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        </div>-->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>










          </div>
        </div>
    </div>
</div>