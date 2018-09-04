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
            <h2 id="appSubtitle">Yale Spider Dataset</h2>
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
                        <div class="left">Spider is a large-scale human-labeled dataset for complex and cross-domain
                            semantic parsing and text-to-SQL dataset. It consists of 206 databases with multiple tables,
                            11,840 questions, 6445 unique complex SQL queries annotated by 11 students at Yale.
                        </div>
                        </p>
                        <div class="infoHeadline">
                            <h2>Why is it different from previous semantic parsing and text-to-SQL task?</h2>
                        </div>
                        <p align="left">
                        <div class="left">The only difference from v1.0 is that a typo in the first line of … has been
                            corrected.
                        </div>
                        </p>
                        <div class="infoHeadline">
                            <h2>News</h2>
                        </div>
                        <p align="left">
                        <div class="left" style="background-color: lightblue">
                            <span class="label label-default">News</span>
                            Spider is a large-scale human-labeled dataset for complex and cross-domain semantic parsing
                            and text-to-SQL dataset. It consists of 206 databases with multiple tables, 11,840
                            questions, 6445 unique complex SQL queries annotated by 11 students at Yale.
                        </div>
                        </p>
                        <div class="infoHeadline">
                            <h2>Examples and Format</h2>
                        </div>
                        <ul>
                            <li>We've built a few resources to help you get started with the dataset.</li>
                            <li>Download a copy of the dataset v1.0 (distributed under the CC BY-SA 4.0 license) :</li>
                        </ul>
                        <div class="infoHeadline">
                            <h2>Getting Started</h2>
                        </div>
                        <a class="btn actionBtn" href="http://arxiv.org/abs/1806.03822">Spider paper</a>
                        <a class="btn actionBtn inverseBtn" href="https://arxiv.org/abs/1805.04617" download>Training set</a>
                        <div class="infoHeadline">
                            <h2>Reference</h2>
                        </div>
                        <ul>
                            <li><a href="https://taoyds.github.io/">Spider: A Large-Scale Human-Labeled Dataset for Complex and Cross-Domain Semantic Parsing and Text-to-SQL Task</a> by Tao Yu, Rui Zhang, Kai Yang, Michihiro Yasunaga, Dongxu Wang, Zifan Li, James Ma, Irene Li, Qingning Yao, Shanelle Roman, Zilin Zhang and Dragomir Radev
                            </li>
                            <li><a href="https://taoyds.github.io/">SyntaxSQLNet: Syntax Tree Networks for Complex and Cross-Domain Text-to-SQL Task</a> by Tao Yu, Michihiro Yasunaga, Kai Yang, Rui Zhang, Dongxu Wang, Zifan Li and Dragomir Radev
                            </li>
                        </ul>
                        <div class="infoHeadline">
                            <h2>Have Questions</h2>
                        </div>
                        <p align="left">
                        <div class="left">Ask us questions at our Github issues page or contact Tao Yu. Because SQuAD is
                            an ongoing effort, we expect the dataset to evolve. To keep up to date with major updates,
                            please subscribe:
                        </div>
                        </p>
                        <p align="left">
                        <div class="left">If you have any questions or comments regarding this site, want to be notified
                            of updates, or downloaded and used this data, please contact Lillian Lee.
                        </div>
                        </p>
                        <div class="infoHeadline">
                            <h2>Acknowledgement</h2>
                        </div>
                        <p align="left">
                        <div class="left">We thank Tianze Shi, Graham Neubig, and the anonymous reviewers for their
                            precious comments.
                        </div>
                        </p>
                        <img src="/lily-logo.png" alt="test image">
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
                        <div class="left"> The data is split into training, development, and two test sets. The first
                            test set is public and available with the data, the second will not be released. The
                            leaderboard shows accuracy for the development and public test sets, as well as accuracy and
                            consistency for the unreleased test set (Test-U). The ranking in the leaderboards below is
                            based on accuracy on the unreleased test set.
                        </div>
                        </p>
                        <p align="left">
                        <div class="left">Once you have a built a model that works to your expectations on the dev set,
                            you submit it to get official scores on the dev and a hidden test set. To preserve the
                            integrity of test results, we do not release the test set to the public. Instead, we require
                            you to submit your model so that we can run it on the test set for you. Here's a tutorial
                            walking you through official evaluation of your model:
                        </div>
                        </p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>Model</th>
                                <th>EM</th>
                                <th>F1</th>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Model</td>
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