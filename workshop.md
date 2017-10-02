---
layout: page
title: Workshop
permalink: /workshop/
---

 <header class="post-header">
    <h2 class="post-title">The Data Science Workshop on Computational Social Science</h2>
  </header> 


<h3 align="center">Friday, October 20, 2017 <a href="https://docs.google.com/forms/d/e/1FAIpQLSdXxc3x7TMrKzJq_2Ufc5mMpyiLBjd8JHLJayRFtHSdE2twSA/viewform">Register</a> Now!</h3>

## Location

The workshop will be held at the [Luce Hall](http://conferencesandevents.yale.edu/campus/venues/luce-hall) at Yale University. The address is 34 Hillhouse Ave, New Haven, CT 06511.

## Schedule
<table>
{% for talk in site.data.talks.talks %}


  <tr><td style="padding:10px">
{% if talk.image %}<img width="200px" src="{{talk.image}}"> {% endif %}
</td><td style="padding:10px">
{{talk.title}}
<br>
<a class="paper" href="{{talk.url}}">
{{talk.speaker}}</a><br>
{{talk.affiliation}} <br>


{% if talk.abstract %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse1}}" data-toggle="collapse"> Abstract </a> {% endif %} 
<div style="max-width:400px" id="{{talk.collapse2}}" class="collapse">
{{talk.abstract}}
</div>
{% if talk.bio %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse3}}" data-toggle="collapse"> Bio </a> {% endif %} 
<div style="max-width:400px" id="{{talk.collapse4}}" class="collapse">
{{talk.bio}}
</div>
<br>

</td></tr>

{% endfor %}
</table>

<iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTxEsvLfZ54kRSmWXc78lmh0&key=AIzaSyC9I1jdJUkkDqPm8OXQlzPQcsVLM5juJkg" allowfullscreen></iframe>
