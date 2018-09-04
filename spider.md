---
layout: spider
permalink: /seq2sql/spider
---

<div class="navbar navbar-default navbar-fixed-top" id="topNavbar" role="navigation">
    <div class="container clearfix">
        <div class="leftNav">
            <div class="brandDiv">
                <a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" height="42"></a>
            </div>
        </div>
    </div>
</div>

<div class="cover" id="topCover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="appTitle">
                    Spider
                    <b>1.0</b>
                </h1>
            </div>
            <center><img src="/lily-logo.png" alt="test image" height="72"></center>
            <h2 id="appSubtitle">Yale Semantic Parsing and Text-to-SQL Dataset</h2>
        </div>
    </div>
</div>

<div class="cover" id="contentCover">
<div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="infoCard">
                    <div class="infoBody">
                        <div class="infoHeadline">
                            <h2>What is Spider?</h2>
                        </div>
                        <p align="left">
                        <div class="left">Spider is a large-scale <span style="color:#286dc0"><i>complex and cross-domain</i></span> semantic parsing and text-to-SQL dataset annotated by 11 Yale students.

                        It consists of 10,181 questions and 5,693 unique complex SQL queries on 200 databases with multiple tables covering 138 different domains.

                        Spider 1.0 has different complicated SQL queries and databases appear in train and test sets.
                        To do well on it, systems must <span style="color:#286dc0"><i>generalize well to not only both new SQL queries but also new database schemas</i></span>.

                        <a class="btn actionBtn" href="http://arxiv.org/abs/1806.03822">Spider paper</a>
                        </div>
                        </p>

                        <div class="infoHeadline">
                            <h2>News</h2>
                        </div>
                        <p align="left">
                        <div class="left" style="background-color: #f5f5f5">
                        <ul>
                            <li><span class="label label-default" style="background-color: #286dc0"><i>News</i></span>
                            We will consider execution accuracy later.</li>
                            <li><span class="label label-default" style="background-color: #286dc0"><i>News</i></span>
                            We will consider execution accuracy later.</li>
                        </ul>
                        </div>
                        </p>

                        <div class="infoHeadline">
                            <h2>Why Spider 1.0 Differs from Previous Datasets?</h2>
                        </div>
                        <img src="/images/spider_chart.png" alt="test image">
                        <p align="left">
                        <div class="left">
                        Spider 1.0 is distinct from most of the previous semantic parsing tasks because:
                            <ul>
                                <li><i>ATIS, Geo, Scholar</i>: only a single database, limited SQL queries, and have the exact same SQL queries in the train and test.</li>
                                <li><i>WikiSQL</i>: SQL queries are simple, database is only a simple table.</li>
                            </ul>
                        Spider 1.0 consists of 10,181 questions and 5,693 unique complex SQL queries on 200 databases with multiple tables covering 138 different domains.
                        </div>
                        </p>

                        <div class="infoHeadline">
                            <h2>Getting Started</h2>
                        </div>
                        <p align="left">
                        <div class="left"> The data is split into training, development, and unreased test sets. Download a copy of the dataset (distributed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CC BY-SA 4.0</a> license):
                        </div>
                        </p>

                        <a class="btn actionBtn inverseBtn" href="https://taoyds.github.io/" download>Training Set</a>
                        <a class="btn actionBtn inverseBtn" href="https://taoyds.github.io/" download>Dev Set</a>

                        Details of baseline models and evaluation script can be found on the following GitHub site:

                        <a class="btn actionBtn inverseBtn" href="https://taoyds.github.io/" download>Spider GitHub page</a>

                        <p align="left">
                        <div class="left">Once you have a built a model that works to your expectations on the dev set,
                            you submit it to get official scores on the dev and a hidden test set. To preserve the
                            integrity of test results, we do not release the test set to the public. Instead, we require
                            you to submit your model so that we can run it on the test set for you. Here's a tutorial walking you through official evaluation of your model (comming soon):
                        </div>
                        </p>

                        <a class="btn actionBtn inverseBtn" href="https://taoyds.github.io/" download>Submission Tutorial</a>

                        <div class="infoHeadline">
                            <h2>Have Questions?</h2>
                        </div>
                        <p align="left">
                        <div class="left">Ask us questions at our <a href="https://taoyds.github.io/">Github issues page</a> or contact <a href="https://taoyds.github.io/">Tao Yu</a>, <a href="https://taoyds.github.io/">Rui Zhang</a>, or
                        <a href="https://michiyasunaga.github.io/">Michihiro Yasunaga</a>.
                        </div>
                        </p>
                        <div class="infoHeadline">
                            <h2>Acknowledgement</h2>
                        </div>
                        <p align="left">
                        <div class="left">We thank <a href="http://www.cs.cornell.edu/~tianze/">Tianze Shi</a>, <a href="http://www.phontron.com/">Graham Neubig</a>, and the anonymous reviewers for their precious comments on this project. Also, we thank <a href="https://rajpurkar.github.io/">Pranav Rajpurkar</a> for give the permission to build this cite based on <a href="">SQuAD</a>.
                        </div>
                        </p>
                        <p align="left">
                        <div class="left">Our team at the submit of the East Rock park in New Haven (post is "NLseq2SQL"):
                        </div>
                        </p>
                        <img src="/images/spider_group.jpeg" alt="test image">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="infoCard">
                    <div class="infoBody">
                        <div class="infoHeadline">
                            <h2>Leaderboard</h2>
                        </div>
                        <p align="left">
                        <div class="left">
                        The leaderboard shows accuracy for the development and the unreleased test set. The ranking in the leaderboards below is based on accuracy on the hidden test set.
                        </div>
                        </p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>Model</th>
                                <th>Easy</th>
                                <th>Medium</th>
                                <th>Hard</th>
                                <th>Extra Hard</th>
                                <th>All</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Seq2Seq</td>
                                <td>100</td>
                                <td>100</td>
                                <td>100</td>
                                <td>100</td>
                                <td>100</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
