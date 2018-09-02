---
layout: spider
permalink: /seq2sql/spider
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Spider Dataset</h2>
  </header> 

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
                        <div class="left">
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
                        <div class="infoHeadline">
                            <h2>Reference</h2>
                        </div>
                        <ul>
                            <li>This data was introduced in Matt Thomas, Bo Pang, and Lillian Lee, Spider: A Large-Scale
                                Human-Labeled Dataset for Complex and Cross-Domain Semantic Parsing and Text-to-SQL
                                Task. The original version of the paper appeared in the Proceedings of EMNLP, 2018, pp.
                                1–10. However, the paper has been updated since then; the link provided is to the most
                                current version.
                            </li>
                            <li>If you have used this data, we would appreciate hearing about it (Lillian Lee is our
                                designated contact person); a list of those papers we know about can be found below.
                                we’d appreciate you cite if you use the corpus in your research or participate in the
                                challenge:
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