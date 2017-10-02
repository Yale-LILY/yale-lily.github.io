---
layout: page
title: Test
permalink: /test/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
 <header class="post-header">
    <h2 class="post-title">The Data Science Workshop on Computational Social Science</h2>
  </header> 



<h3 align="center">Friday, October 20, 2017</h3>
<h3 align="center">Luce Hall, 34 Hillhouse Avenue at Yale University</h3>
<h3 align="center"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdXxc3x7TMrKzJq_2Ufc5mMpyiLBjd8JHLJayRFtHSdE2twSA/viewform">Register</a> Now!</h3>

- Location
The workshop will be held at the [Luce Hall](http://conferencesandevents.yale.edu/campus/venues/luce-hall) at Yale University. The address is 34 Hillhouse Ave, New Haven, CT 06511.

<table>
{% for paper in site.data.papers.papers %}


  <tr><td style="padding:10px">
{% if paper.image %}<img width="250px" src="{{paper.image}}"> {% endif %}
</td><td style="padding:10px">
<a class="paper" href="{{paper.pdf}}">
{{paper.title}}
</a><br>
{{paper.authors}}<br>
{{paper.conference}} <br>

{% if paper.pdf %}<a class="btn btn-labeled btn-primary" href="{{paper.pdf}}">PDF</a>{% endif %}
{% if paper.arXiv %}<a class="btn btn-labeled btn-primary" href="{{paper.pdf}}">arXiv</a>{% endif %}
{% if paper.bibtex %}<a class="btn btn-labeled btn-primary" href="{{paper.bibtex}}">BibTex</a>{% endif %}
{% if paper.code %}<a class="btn btn-labeled btn-primary" href="{{paper.code}}">Code</a>{% endif %}
<br>

</td></tr>

{% endfor %}
</table>

<iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTxEsvLfZ54kRSmWXc78lmh0&key=AIzaSyC9I1jdJUkkDqPm8OXQlzPQcsVLM5juJkg" allowfullscreen></iframe>
