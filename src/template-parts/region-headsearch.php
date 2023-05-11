


  <nav id="universal-header">
    <div class="container-xxl">
  
	

      <ul class="menu-universal">
	  <li class="uni-nav-item">
	  <div class="collapse collapse-horizontal position-absolute" id="collapseWidthExample">
		<div class="card" style="width: 300px;">
  	       <?php get_search_form(); ?>
        </div>
       </div>
</li>
<!--         <li class="col-auto list-inline-item me-md-auto"><small><a href="https://www.utk.edu" class="nav-link text-light text-uppercase text-center text-lg-left">www.utk.edu</a></small></li> -->
        <li class="uni-nav-item"><small><a href="https://www.utk.edu/requestinfo/" class="menu-item text-light text-uppercase">Request Info</a></small></li>
        <li class="uni-nav-item"><small><a href="https://www.utk.edu/apply/" class="menu-item text-light text-uppercase">Apply</a></small></li>
        <li class="uni-nav-item"><small><a href="https://www.utk.edu/visit/" class="menu-item text-light text-uppercase">Visit</a></small></li>
        <li class="uni-nav-item"><small><a href="https://www.utk.edu/give/" class="menu-item text-light text-uppercase">Give</a></small></li>
		<li class="uni-nav-item"></li>
        <li class="uni-nav-item">
		<button class="btn btn-search text-uppercase text-light navbar-toggler col-auto collapsed px-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">

		  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"></path></svg>
          <span>Search</span></button></li>
		  <li class="uni-nav-item"> <button type="button" id="btn-searchopen" class="btn btn-search text-uppercase text-light navbar-toggler col-auto collapsed px-0" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Toggle search"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"></path></svg>
  <span>Search</span></button></li>
      </ul>


    </div>
  </nav>


<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">

	<div class="modal-header">
	  <p class="text-left">Search</p>

	  <button type="button" class="text-uppercase navbar-toggler collapsed fs-6 text-end" id="btn-searchclose" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Toggle search">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#333333" aria-hidden="true" id="searchHeader-close">
              <path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"></path>
            </svg>
            <span>Close</span>
		</button>
    </div>


	  <div class="modal-body">
        <div class="container-xxl">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
              <ul class="nav nav-pills justify-content-center justify-content-lg-start" id="searchTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="this-site-tab" data-bs-toggle="tab" data-bs-target="#this-site" type="button" role="tab" aria-controls="this-site" aria-selected="true">Search  <?php bloginfo( 'name' ); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="events" aria-selected="false">All of utk.edu</button>
                </li>   
              </ul>

			  <a class="nav-link" href="https://maps.utk.edu">Map</a>
			  <a class="nav-link" href="https://www.utk.edu/alpha">A-Z Index</a>



              <div class="tab-content">
                <div class="tab-pane active" id="this-site" role="tabpanel" aria-labelledby="this-site-tab">

                  <form class="form-inline hidden-print mt-4" id="cse-searchbox-form">
                    <div class="mb-3 input-group">
                      <label class="sr-only visually-hidden" for="q">Search</label>
                      <input type="search" class="form-control" title="Search utk.edu" placeholder="Example: Apply, Payroll, Provost, English Department"  name="q" id="q">
                      <button type="submit" name="btnG" class="btn btn-utlink">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" aria-hidden="true" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> <span class="visually-hidden">Search</span></button>
                    </div>
                  </form>

                  <div class="gcse-searchresults-only" data-gname="this-site-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
                </div>
                <div class="tab-pane" id="all" role="tabpanel" aria-labelledby="events-tab">

				<script async src="https://cse.google.com/cse.js?cx=da48cf0836de1c946"></script>
                <div class="gcse-searchbox"></div>
                <div class="gcse-searchresults"></div>

    			</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
