---
title: Blog
permalink: /blog/
---


<ul class="list-unstyled">
{% for post in site.posts  %}
    {% capture this_year %}{{ post.date | date: "%Y" }}{% endcapture %}
    {% capture next_year %}{{ post.previous.date | date: "%Y" }}{% endcapture %}

    {% if forloop.first %}
    <li class="archive-year"><h2 id="{{ this_year }}-ref"  class="head-archive-year">{{this_year}}</h2>
    <ol class="list-unstyled">
    {% endif %}

    <li class="archive-item">
      <a href="{{ site.baseurl }}{{ post.url }}"> <span>{{ post.title }}</span></a><br>
      <small><time datetime="{{ post.date | date: "%Y-%m-%d" }}">{{ post.date | date_to_string}}</time></small>

    </li>

    {% if forloop.last %}
    </ol>
    {% else %}
        {% if this_year != next_year %}
        </ol></li><li>
        <h2 id="{{ next_year }}-ref" class="head-archive-year">{{next_year}}</h2>
        <ol>
        {% endif %}
    {% endif %}
{% endfor %}
