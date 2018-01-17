---
layout: page
permalink: /workshop/
---

 <header class="post-header">
    <h2 class="post-title">The Data Science Workshop on Computational Social Science</h2>
  </header> 


<h3 align="center">The workshop was held in on October 20, 2017. Featured in <a href="https://yaledailynews.com/blog/2017/10/25/yale-holds-inaugural-data-science-workshop/">the Yale Daily News</a>. </h3>


## Schedule

<td style="padding:10px">
</td><td style="padding:10px">
9:00-9:15<br>
Introduction <br>
<a class="paper" href="http://www.cs.yale.edu/homes/radev/">
Dragomir Radev </a>
<a class="paper" href="http://cs-www.cs.yale.edu/homes/spielman/">
Daniel Spielman </a>
<a class="paper" href="http://www.stat.yale.edu/~hz68/">
Harry Zhou </a> <br>
Yale University <br>
</td>


<table>
{% for talk in site.data.talks.talks %}


  <tr><td style="padding:10px">
{% if talk.image %}<img width="200px" src="{{talk.image}}"> {% endif %}
</td><td style="padding:10px">
{{talk.time}}
<br>
{% if talk.title %}
{{talk.title}}
<br> {% endif %}
{% if talk.speaker %}
<a class="paper" href="{{talk.url}}">
{{talk.speaker}}</a><br> {% endif %}
{% if talk.affiliation %}
{{talk.affiliation}} <br> {% endif %}


{% if talk.abstract %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse1}}" data-toggle="collapse"> Abstract </a> {% endif %} 
<div style="max-width:400px" id="{{talk.collapse2}}" class="collapse">
{{talk.abstract}}
</div>
{% if talk.bio %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse3}}" data-toggle="collapse"> Bio </a> 
<div style="max-width:400px" id="{{talk.collapse4}}" class="collapse">
{{talk.bio}}
</div>
{% endif %}
{% if talk.slides %}<a class="btn btn-labeled btn-primary" href="{{talk.slides}}">Slides</a>{% endif %}

<br>
</td></tr>

{% endfor %}
</table>

<iframe width="700" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJTxEsvLfZ54kRSmWXc78lmh0&key=AIzaSyC9I1jdJUkkDqPm8OXQlzPQcsVLM5juJkg" allowfullscreen></iframe>
