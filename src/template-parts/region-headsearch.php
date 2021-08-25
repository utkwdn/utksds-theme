<?php
    $site_width = get_theme_mod( 'site_width' );
?>




  <nav id="universal-header">
    <div class="container-xxl">
      <ul class="row justify-content-end list-inline mb-0">
        <li class="col-auto list-inline-item me-md-auto"><small><a href="https://www.utk.edu" class="nav-link text-light text-uppercase text-center text-lg-left">www.utk.edu</a></small></li>
        <li class="col-auto"><small><a href="https://www.utk.edu/requestinfo/" class="nav-link px-0 text-light text-uppercase">Request Info</a></small></li>
        <li class="col-auto"><small><a href="https://www.utk.edu/visit/" class="nav-link px-0 text-light text-uppercase">Visit</a></small></li>
        <li class="col-auto"><small><a href="https://www.utk.edu/apply/" class="nav-link px-0 text-light text-uppercase">Apply</a></small></li>
        <li class="col-auto"><small><a href="https://www.utk.edu/give/" class="nav-link px-0 text-light text-uppercase">Give</a></small></li>
        <li class="col-auto"> <button type="button" id="btn-searchopen" class="btn btn-search text-uppercase text-light navbar-toggler col-auto collapsed px-0" data-bs-toggle="modal" data-bs-target="#searchModal" aria-label="Toggle search"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" id="searchHeader-open"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"></path></svg>
  <span>Search</span></button></li>
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
		
		  <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="this-site-tab" data-bs-toggle="tab" data-bs-target="#this-site" type="button" role="tab" aria-controls="this-site" aria-selected="true">Search utk.edu</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false">Events</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="false">News</button>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" href="https://directory.utk.edu">Directory</a>
                </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" href="https://www.utk.edu/alpha">A-Z Index</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" href="https://maps.utk.edu">Map</a>
                </li>
              </ul>



    
              <div class="tab-content">
                <div class="tab-pane active" id="this-site" role="tabpanel" aria-labelledby="this-site-tab">

                  <form class="form-inline hidden-print mt-4" id="cse-searchbox-form">
                    <div class="mb-3 input-group">
                      <label class="sr-only visually-hidden" for="q">Search</label>
                      <input type="text" class="form-control" title="Search utk.edu"  name="q" id="q">
                      <button type="submit" name="btnG" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> Search</button>
                    </div>
                  </form>

                  <div class="gcse-searchresults-only" data-gname="this-site-results" data-enableImageSearch="false" data-enableOrderBy="false"></div>
                </div>
                <div class="tab-pane" id="events" role="tabpanel" aria-labelledby="events-tab">

                  <form class="form-inline hidden-print mt-4" id="events-searchbox-form">
                    <div class="mb-3 input-group">
                      <label class="sr-only visually-hidden" for="q-events">Search</label>
                      <input type="text" class="form-control" title="Search events"  name="q-events" id="q-events">
                      <button type="submit" name="btnG" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> Search</button>
                    </div>
                  </form>

                </div>
                <div class="tab-pane" id="news" role="tabpanel" aria-labelledby="news-tab">


                  <form class="form-inline hidden-print mt-4" id="news-searchbox-form">
                    <div class="mb-3 input-group">
                      <label class="sr-only visually-hidden" for="q-news">Search</label>
                      <input type="text" class="form-control" title="Search utk.edu"  name="q-news" id="q-news">
                      <button type="submit" name="btnG" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg> Search</button>
                    </div>
                  </form>


                </div>

              </div>
		  
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