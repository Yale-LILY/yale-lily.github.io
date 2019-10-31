---
layout: sparc
permalink: cosql
---

  <div class="navbar navbar-default navbar-fixed-top" id="topNavbar" role="navigation">
     <div class="container clearfix">
        <div class="leftNav">
           <div class="brandDiv">
              <a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" height="40"></a>
           </div>
        </div>
     </div>
  </div>
  <div class="cover" id="topCover">
     <div class="container">
        <div class="row">
           <div class="col-md-12">
              <h1 id="appTitle">
                 CoSQL
                 <b>1.0</b>
                 <img src="/images/sparc_logo.png" alt="test image" height="100">
              </h1>
           </div>
           <h2 id="appSubtitle">Yale & Salesforce Conversational Semantic Parsing and Text-to-SQL Challenge</h2>
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
                       <h2>What is CoSQL?</h2>
                    </div>
                    <p align="left">
                    <div class="left"><b><i>CoSQL</i></b> is a corpus for building cross-domain <b>Co</b>nversational text-to-<b>SQL</b> systems. It is the dilaogue version of the <a href="https://yale-lily.github.io/spider"><b><i>Spider</i></b></a> and <a href="https://yale-lily.github.io/sparc"><b><i>SParC</i></b></a> tasks. CoSQL consists of 30k+ turns plus 10k+ annotated SQL queries, obtained from a <a href="https://en.wikipedia.org/wiki/Wizard_of_Oz_experiment">Wizard-of-Oz</a> collection of 3k dialogues querying 200 complex databases spanning 138 domains. Each dialogue simulates a real-world DB query scenario with a crowd worker as a user exploring the database and a SQL expert retrieving answers with SQL, clarifying ambiguous questions, or otherwise informing of unanswerable questions.
                    </div>
                    <a class="btn actionBtn" href="https://arxiv.org/abs/1909.05378">CoSQL Paper (EMNLP'19)</a>
                    <a class="btn actionBtn" href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">CoSQL Post</a>
                    <hr><b>Related challenges</b>: single-turn <a href="https://yale-lily.github.io/spider"><b><i>Spider</i></b></a> and multi-turn <a href="https://yale-lily.github.io/sparc"><b><i>SParC</i></b></a> text-to-SQL tasks
                        <a class="btn actionBtn" href="https://yale-lily.github.io/spider">Spider Chanllenge (EMNLP'18)</a>
                        <a class="btn actionBtn" href="https://yale-lily.github.io/sparc">SParC Chanllenge (ACL'19)</a>
                    </p>
                    <div class="infoHeadline">
                       <h2>News</h2>
                    </div>
                    <p align="left">
                    <div class="left" style="background-color: #f5f5f5">
                       <ul>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>10/30/2019</i></span>
                             CoSQL dataset is out, see you at <a href="https://www.emnlp-ijcnlp2019.org/">EMNLP 2019, Hong Kong</a>!
                          </li>
                       </ul>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Why CoSQL?</h2>
                    </div>
                    <p align="left">
                    <div class="left">
                       CoSQL introduces new challenges compared to existing task-oriented dialogue tasks:       
                       <ul>
                          <li>the dialogue states are grounded in domain-independent SQL program instead of domain-specific slot-value pairs.</li>
                          <li>because testing is done on unseen databases, success requires generalizing to new domains.</li>
                       </ul>
                    <hr>Compared to other semantic parsing/text-to-SQL tasks, CoSQL presents new challenges:
                       <ul>
                          <li>user questions are not necessarily answerable.</li>
                          <li>it involves system responses to clarify ambiguous questions, verify returned results, and notify users of unanswerable or unrelated questions.</li>
                          <li>each dialog is obtained via the Wizard-of-Oz setting between a crowd worker and a SQL expert.</li>
                       </ul>
                    <hr>CoSQL includes three tasks:
                      <ul>
                          <li><b>SQL-grounded dialogue state tracking</b> to map user utterances into SQL queries if possible given the interaction history</li>
                          <li><b>natural language response generation</b> based on an executed SQL and its results for user verification</li>
                          <li><b>user dialogue act prediction</b> to detect and resolve ambiguous and unanswerable questions</li>
                       </ul>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Getting Started</h2>
                    </div>
                    <p align="left">
                    <div class="left"> The data is split into training, development, and unreleased test sets. Download a copy of the dataset (distributed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CC BY-SA 4.0</a> license):
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://drive.google.com/uc?export=download&id=13Abvu5SUMSP3SJM-ZIj66mOkeyAquR73" download>CoSQL Dataset</a>
                    Details of baseline models and evaluation script can be found on the following GitHub site:
                    <a class="btn actionBtn inverseBtn" href="https://github.com/taoyds/cosql" download>CoSQL GitHub Page</a>
                    <p align="left">
                    <div class="left">Once you have built a model that works to your expectations on the dev set,
                       you can submit it to get official scores on the dev and a hidden test set. To preserve the
                       integrity of test results, we do not release the test set to the public. Instead, we request
                       you to submit your model so that we can run it on the test set for you. Here's a tutorial walking you through official evaluation of your model:
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://worksheets.codalab.org/worksheets/0x9051e25df7b1404f9b1829f48b675c97" download>Submission Tutorial</a>
                    <div class="infoHeadline">
                       <h2>Data Examples</h2>
                    </div>
                    <p align="left">
                    <div class="left"> Some examples look like the following:
                    </div>
                    </p>
                    <img src="/images/cosql_example.png" alt="test image">
                    <div class="infoHeadline">
                       <h2>Have Questions or Want to Contribute ?</h2>
                    </div>
                    <p align="left">
                    <div class="left">Ask us questions at our <a href="https://github.com/taoyds/sparc/issues">Github issues page</a> or contact <a href="https://taoyds.github.io/">Tao Yu</a>, <a href="https://ryanzhumich.github.io/">Rui Zhang</a>, or
                       <a href="http://victorialin.net/">Xi Victoria Lin</a>.
                    </div>
                    </p>
                    <p align="left">
                    <div class="left">We expect the dataset to evolve. We would greatly appreciate it if you could donate us your non-private databases or SQL queries for the project.
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Acknowledgement</h2>
                    </div>
                    <p align="left">
                    <div class="left">We thank <a href="https://rajpurkar.github.io/">Pranav Rajpurkar</a> for giving us the permission to build this website based on <a href="https://rajpurkar.github.io/SQuAD-explorer/">SQuAD</a>.
                    </div>
                    </p>
                    <p align="left">
                    <div class="left">Part of our CoSQL team at <a href="https://yins.yale.edu/">YINS</a>:
                    </div>
                    </p>
                    <img src="/images/sparc_lily.jpeg" alt="test image">
                 </div>
                 <div class="infoSubheadline">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://yale-lily.github.io/sparc" data-text="SParC: Yale & Salesforce Semantic Parsing and Text-to-SQL in Context Challenge" data-via="ACL 2019" data-size="large" data-hashtags="SParC">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                 </div>
              </div>
           </div>
           <div class="col-md-7">
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - SQL-grounded Dialogue State Tracking</h2>
                    </div>
                    <p align="left">
                    <div class="left">In CoSQL, user dialogue states are grounded in SQL queries. Dialogue state tracking (DST) in this case is to predict the correct SQL query for each user utterance with <code>INFORM_SQL</code> label given the interaction context and the DB schema. Comparing to other context-dependent text-to-SQL tasks such as <a href="https://yale-lily.github.io/sparc"><i>SParC</i></a>, the DST task in CoSQL also includes the ambiguous questions if the user affirms the system clarification of them. In this case, the system clarification is also given as part of the interaction context to predict the SQL query corresponding to the question. As in <a href="https://yale-lily.github.io/spider"><i>Spider</i></a> and <a href="https://yale-lily.github.io/sparc"><i>SParC</i></a> tasks, we report results of Exact Set Match without Values here.
                    </div>
                    </p>
                    <table class="table performanceTable">
                        <tr>
                           <th>Rank</th>
                           <th>Model</th>
                           <th>Question Match</th>
                           <th>Interaction Match</th>
                        </tr>
                        <tr>
                           <td>
                              <p>1</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al. EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/sparc_atis_pytorch">code</a>
                           </td>
                           <td><b>47.9</b></td>
                           <td><b>25.3</b></td>
                        </tr>
                        <tr>
                           <td>
                              <p>2</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              CD-Seq2Seq
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1906.02285">(Yu et al. ACL '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/sparc_atis_pytorch">code</a>
                           </td>
                           <td>13.9</td>
                           <td>2.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>3</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              SyntaxSQL-con
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1906.02285">(Yu et al. ACL '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/sparc_atis_pytorch">code</a>
                           </td>
                           <td>14.1</td>
                           <td>2.2</td>
                        </tr>
                    </table>
                 </div>
              </div>
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - Execution with Value Selection</h2>
                    </div>
                    <p align="left">
                    <div class="left"> Our current models do not predict any value in SQL conditions so that we do not provide execution accuracies. However, we encourage you to provide it in the future submissions. For value prediction, you can assume  that a list of gold values for each question is given. Your model has to fill them into the right slots in the SQL. Is your system going to the first one showing up on this leaderboard?
                    </div>
                    </p>
                    <table class="table performanceTable">
                    <tr>
                       <th>Rank</th>
                       <th>Model</th>
                       <th>Question Match</th>
                       <th>Interaction Match</th>
                    </tr>
                    <tr>
                       <td>
                          <p></p>
                       </td>
                       <td style="word-break:break-word;">
                       </td>
                       <td></td>
                       <td></td>
                    </tr>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
