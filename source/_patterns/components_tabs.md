---
title: "Tabs"
layout: collection
status: Testing
type: Components
scss: _content_tabs.scss
usage: "Tabs can be a handy way of organizing bits of content on a page."

donts: "

- Don't use tabs to tuck away content you'd rather not look at. Clearer, concise writing or making hard editing choices will be a better choice.

- There is no way to direct link to a tab that is not open, so do not hide content behind a tab that you expect to be easy to find.

"
dos: "

- Pay particular attention to the role attributes and aria-controls in these examples. They make your content more accessible.

"
shortcode: "[tabs][tab title=\"Home\"]Content[/tab][/tabs]"

---


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>