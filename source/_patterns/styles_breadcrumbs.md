---
title: "Bread Crumbs"
status: testing
layout: collection
type: Styles
scss: _interactive_buttons-groups.scss

dos: "

- Keep button labels as short and descriptive as possible.

"
 
donts: "

- Be consistent. Don’t use multiple styles.

- Keep small screens in mind. Wide button groups will break on small screens.

"

shortcode: "[button-group ][button  link=\"#\"]Label[/button][button  link=\"#\"]Label[/button][/button-group]


[button-group  justified=\"true\"][button  link=\"#\"]Label[/button][button  link=\"#\"]Label[/button][/button-group]

[button block=\"true\" link=\"#\"]Block Button[/button]"
---

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home Page</a></li>
    <li class="breadcrumb-item"><a href="#">Parent Page</a></li>
    <li class="breadcrumb-item"><a href="#">Child Page</a></li>
    <li class="breadcrumb-item active" aria-current="page">Current Grandchild Page</li>
  </ol>