---
layout: page
permalink: /teaching/
---


<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Teaching at Yale</h2>
  </header> 

For other Machine Learning-related courses taught at Yale, please see <a href="http://machinelearning.yale.edu/teaching/">ml.yale.edu</a>.

{% for term in site.data.courses %}
<div class ="row">

<div style="text-align:center">
<h3>Courses in {{term.term}}</h3>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Title </th> <th> Instructor</th> <th> Location and Time </th>
</tr>
{% for course in term.courses %}
    <tr>
        <td> 
        {% if course.course_website %}
           <a href="{{course.course_website}}">{{course.title}}</a>
        {% else %}
           {{course.title}}
        {% endif %}
        </td>
        <td> 
        {% if course.instructor_website %}
           <a href="{{course.instructor_website}}">{{course.instructor}}</a>
        {% else %}
           {{course.instructor}}
        {% endif %}
        </td>
        <td> {{course.time}} at {{course.location}} </td>
    </tr>
{% endfor %}
</table>
{% endfor %}

<style>
#pubTable_filter{
    display:none;
}
</style>

<table id="pubTable" class="table table-hover"></table>



