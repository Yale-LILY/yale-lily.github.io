---
layout: spider
permalink: spider
redirect_from: "/seq2sql/spider"
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
                 Spider
                 <b>1.0</b>
                 <img src="/images/spider_logo.png" alt="test image" height="100">
              </h1>
           </div>
           <h2 id="appSubtitle">Yale Semantic Parsing and Text-to-SQL Challenge</h2>
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
                    <div class="left">Spider is a large-scale <a href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c"><i>complex and cross-domain</i></a> semantic parsing and text-to-SQL dataset annotated by 11 Yale students.
                      The goal of the Spider challenge is to develop natural language interfaces to cross-domain databases.
                       It consists of 10,181 questions and 5,693 unique complex SQL queries on 200 databases with multiple tables covering 138 different domains.
                       In Spider 1.0, different complex SQL queries and databases appear in train and test sets.
                       To do well on it, systems must <i>generalize well to not only new SQL queries but also new database schemas</i>.
                      <hr>Why we call it "Spider"? It is because our dataset is complex and cross-domain like a spider crawling across mutiple complex(with many foreign keys) nests(databases).
                       <a class="btn actionBtn" href="https://arxiv.org/abs/1809.08887">Spider Paper (EMNLP'18)</a>
                       <a class="btn actionBtn" href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">Spider Post</a>
                      <hr><b>SParC</b>, the context-dependent version of the Spider task, introduces a new Semantic Parsing in Context challenge.
                       <a class="btn actionBtn" style="background-color: #FF5733" href="https://yale-lily.github.io/sparc">SParC Challenge (ACL'19)</a>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>News</h2>
                    </div>
                    <p align="left">
                    <div class="left" style="background-color: #f5f5f5">
                       <ul>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>9/24/2019</i></span>
                             <a href="https://frcchang.github.io/pub/emnlp2019.2.pdf">A EMNLP 2019 paper</a> (led by Qingkai at <a href="https://frcchang.github.io/">Westlake University</a>) tanslated Spider in Chinese (coming up soon)!
                          </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>5/17/2019</i></span>
                             Our paper <a href="https://arxiv.org/abs/1906.02285">SParC: Cross-Domain Semantic Parsing in Context</a> with Salesforce Research was accepted to ACL 2019! It introduces the context-dependent version of the Spider challenge: <a href="https://yale-lily.github.io/sparc">SParC</a>!
                          </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>5/17/2019</i></span>
                             Please report any <a href="https://github.com/taoyds/spider/issues/24">annotation errors here</a>, we really appreciate your help and will update the data release in this summer!
                          </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>1/14/2019</i></span>
                             The <a href="https://worksheets.codalab.org/worksheets/0x82150f426cb94c17b861ef4162817399/">submission tutorial</a> is out!.
                          </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>12/17/2018</i></span>
                             We updated 7 sqlite database files (<a href="https://github.com/taoyds/spider/issues/14">issue 14</a>). Please download the Spider dataset from this page again.
                          </li>
                          <li><span class="label label-default" style="background-color: #286dc0"><i>10/25/2018</i></span>
                             The evaluation script and results were updated (<a href="https://github.com/taoyds/spider/issues/5">issue 5</a>). Please download the lastest versions of the script and papers. Also, please follow instructions in <a href="https://github.com/taoyds/spider/issues/3">issue 3</a> to generate the latest SQL parsing results (fixed a bug).
                          </li>
                       </ul>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Why Spider?</h2>
                    </div>
                    <img src="/images/spider_chart.png" alt="test image">
                    <p align="left">
                    <div class="left">
                       As the above spider chart shows, Spider 1.0 is distinct from most of the previous semantic parsing tasks because:
                       <ul>
                          <li><a href="https://github.com/jkkummerfeld/text2sql-data"><i>ATIS, Geo, Academic</i></a>: Each of them contains only a single database with a limited number of SQL queries, and has exact same SQL queries in train and test splits.</li>
                          <li><a href="https://github.com/salesforce/WikiSQL"><i>WikiSQL</i></a>: The numbers of SQL queries and tables are significantly large. But all SQL queries are simple, and each database is only a simple table without any foreign key.</li>
                       </ul>
                       Spider 1.0 spans the largest area in the chart, making it the first complex and cross-domain semantic parsing and text-to-SQL dataset! Read more on <a href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">the blog post</a>.
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Getting Started</h2>
                    </div>
                    <p align="left">
                    <div class="left"> The data is split into training, development, and unreleased test sets. Download a copy of the dataset (distributed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CC BY-SA 4.0</a> license):
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://drive.google.com/uc?export=download&id=11icoH_EA-NYb0OrPTdehRWm_d7-DIzWX" download>Spider Dataset</a>
                    Details of baseline models and evaluation script can be found on the following GitHub site:
                    <a class="btn actionBtn inverseBtn" href="https://github.com/taoyds/spider" download>Spider GitHub Page</a>
                    <p align="left">
                    <div class="left">Once you have built a model that works to your expectations on the dev set,
                       you can submit it to get official scores on the dev and a hidden test set. To preserve the
                       integrity of test results, we do not release the test set to the public. Instead, we request
                       you to submit your model so that we can run it on the test set for you. Here's a tutorial walking you through official evaluation of your model:
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://worksheets.codalab.org/worksheets/0x82150f426cb94c17b861ef4162817399/" download>Submission Tutorial</a>
                    <div class="infoHeadline">
                       <h2>Data Examples</h2>
                    </div>
                    <p align="left">
                    <div class="left"> Some examples look like the following:
                    </div>
                    </p>
                    <img src="/images/spider_examples.png" alt="test image">
                    <div class="infoHeadline">
                       <h2>Have Questions or Want to Contribute ?</h2>
                    </div>
                    <p align="left">
                    <div class="left">Ask us questions at our <a href="https://github.com/taoyds/spider/issues">Github issues page</a> or contact <a href="https://taoyds.github.io/">Tao Yu</a>, <a href="https://ryanzhumich.github.io/">Rui Zhang</a>, or
                       <a href="https://michiyasunaga.github.io/">Michihiro Yasunaga</a>.
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
                    <div class="left">We thank <a href="http://www.phontron.com/">Graham Neubig</a>, <a href="http://www.cs.cornell.edu/~tianze/">Tianze Shi</a>, <a href="http://www-personal.umich.edu/~cfdollak/">Catherine Finegan-Dollak</a>, and the anonymous reviewers for their precious comments on this project. Also, we thank <a href="https://rajpurkar.github.io/">Pranav Rajpurkar</a> for giving us the permission to build this website based on <a href="https://rajpurkar.github.io/SQuAD-explorer/">SQuAD</a>.
                    </div>
                    </p>
                    <p align="left">
                    <div class="left">Our team at the summit of the East Rock park in New Haven (The pose is "NLseq2SQL"):
                    </div>
                    </p>
                    <img src="/images/spider_group.jpeg" alt="test image">
                 </div>
                 <div class="infoSubheadline">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://yale-lily.github.io/spider" data-text="Spider: A Large-Scale Human-Labeled Dataset for Complex and Cross-Domain Semantic Parsing and Text-to-SQL Task" data-via="lilynlp" data-size="large" data-hashtags="Spider">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                 </div>
              </div>
           </div>
           <div class="col-md-7">
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - Exact Set Match without Values</h2>
                    </div>
                    <p align="left">
                    <div class="left">For exact matching evaluation, instead of simply conducting string comparison between the predicted and gold SQL queries, we decompose each SQL into several clauses, and conduct set comparison in each SQL clause. Please refer to the paper and <a href="https://github.com/taoyds/spider/tree/master/evaluation_examples">the Github page</a> for more details.
                    </div>
                    </p>
                    <table class="table performanceTable">
                        <tr>
                           <th>Rank</th>
                           <th>Model</th>
                           <th>Dev</th>
                           <th>Test</th>
                        </tr>
                        <tr>
                           <td>
                              <p>1</p>
                              <span class="date label label-default">June 24, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              TPNet + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td><b>63.9</b></td>
                           <td><b>55.0</b></td>
                        </tr>
                        <tr>
                           <td>
                              <p>2</p>
                              <span class="date label label-default">Sep 20, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GIRN + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>60.2</td>
                           <td>54.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>3</p>
                              <span class="date label label-default">May 19, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet + BERT
                              <p class="institution">Microsoft Research Asia</p>
                              <a class="link" href="https://arxiv.org/abs/1905.08205">(Guo and Zhan et al., ACL '19)</a>
                              <a class="link" href="https://github.com/zhanzecheng/IRNet">code</a>
                           </td>
                           <td>61.9</td>
                           <td>54.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>4</p>
                              <span class="date label label-default">Sep 19, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>60.6</td>
                           <td>53.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>5</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL + BERT
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/sparc_atis_pytorch">code</a>
                           </td>
                           <td>57.6</td>
                           <td>53.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>6</p>
                              <span class="date label label-default">June 24, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              TPNet
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>55.4</td>
                           <td>48.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>7</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              Global-GNN
                              <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/pdf/1908.11214">(Bogin et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/benbogin/spider-schema-gnn-global">code</a>
                           </td>
                           <td>52.7</td>
                           <td>47.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>8</p>
                              <span class="date label label-default">May 19, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet
                              <p class="institution">Microsoft Research Asia</p>
                              <a class="link" href="https://arxiv.org/abs/1905.08205">(Guo and Zhan et al., ACL '19)</a>
                              <a class="link" href="https://github.com/zhanzecheng/IRNet">code</a>
                           </td>
                           <td>53.2</td>
                           <td>46.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>9</p>
                              <span class="date label label-default">June 11, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              HSRNet
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>51.5</td>
                           <td>45.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>10</p>
                              <span class="date label label-default">June 12, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              CFGN
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>48.7</td>
                           <td>44.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>11</p>
                              <span class="date label label-default">Aug 31, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              NatSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>52.9</td>
                           <td>42.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>12</p>
                              <span class="date label label-default">May 16, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GNN
                              <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/abs/1905.06241">(Bogin et al., ACL '19)</a>
                              <a class="link" href="https://github.com/benbogin/spider-schema-gnn">code</a>
                           </td>
                           <td>40.7</td>
                           <td>39.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>13</p>
                              <span class="date label label-default">Feb 25, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              SASeq
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>40.8</td>
                           <td>37.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>14</p>
                              <span class="date label label-default">May 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GrammarSQL
                              <p class="institution">Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/abs/1905.13326">(Lin et al., '19)</a>
                           </td>
                           <td>34.8</td>
                           <td>33.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>15</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/sparc_atis_pytorch">code</a>
                           </td>
                           <td>36.4</td>
                           <td>32.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>16</p>
                              <span class="date label label-default">Sep 20, 2018</span>
                           </td>
                           <td style="word-break:break-word;">
                              <i>SyntaxSQLNet + augment</i>
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1810.05237">(Yu et al., EMNLP '18)</a>
                              <a class="link" href="https://github.com/taoyds/syntaxSQL">code</a>
                           </td>
                           <td>24.8</td>
                           <td>27.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>17</p>
                              <span class="date label label-default">April 18, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              RCSQL
                              <p class="institution">SAP Labs Korea</p>
                              <a class="link" href="https://arxiv.org/abs/1904.08835">(Lee, EMNLP'19)</a>
                           </td>
                           <td>28.5</td>
                           <td>24.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>18</p>
                              <span class="date label label-default">Sep 20, 2018</span>
                           </td>
                           <td style="word-break:break-word;">
                              SyntaxSQLNet
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1810.05237">(Yu et al., EMNLP '18)</a>
                              <a class="link" href="https://github.com/taoyds/syntaxSQL">code</a>
                           </td>
                           <td>18.9</td>
                           <td>19.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>19</p>
                              <span class="date label label-default">Sep 20, 2018</span>
                           </td>
                           <td style="word-break:break-word;">
                              SQLNet
                              <p class="institution">Shanghai Jiao Tong University <i>(modified by Yale)</i></p>
                              <a class="link" href="https://arxiv.org/abs/1711.04436">(Xu et al., '18)</a>
                              <a class="link" href="https://github.com/taoyds/spider/tree/master/baselines/sqlnet">code</a>
                           </td>
                           <td>10.9</td>
                           <td>12.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>20</p>
                              <span class="date label label-default">Sep 20, 2018</span>
                           </td>
                           <td style="word-break:break-word;">
                              TypeSQL
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1804.09769">(Yu et al., NAACL '18)</a>
                              <a class="link" href="https://github.com/taoyds/spider/tree/master/baselines/typesql">code</a>
                           </td>
                           <td>8.0</td>
                           <td>8.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>21</p>
                              <span class="date label label-default">Sep 20, 2018</span>
                           </td>
                           <td style="word-break:break-word;">
                              Seq2Seq + attention
                              <p class="institution">University of Edinburgh <i>(modified by Yale)</i></p>
                              <a class="link" href="https://arxiv.org/abs/1601.01280">(Dong and Lapata, ACL '16)</a>
                              <a class="link" href="https://github.com/taoyds/spider/tree/master/baselines/seq2seq_attention_copy">code</a>
                           </td>
                           <td>1.8</td>
                           <td>4.8</td>
                        </tr>
                    </table>
                    <p align="left">
                    <div class="left"> <b>Other papers used Spider (without evaluation on the test set):</b>
                      <ol>
                        <li><a class="link" href="https://frcchang.github.io/pub/emnlp2019.2.pdf">(Min et al., EMNLP 2019)</a>, Westlake University, Spider in Chinese</li>
                        <li><a class="link" href="https://arxiv.org/abs/1905.08407">(Shaw et al., ACL 2019)</a>, Google</li>
                        <li><a class="link" href="https://arxiv.org/abs/1906.10816">(Shin et al., NeurlPS 2019)</a>, UC Berkeley & MSR</li>
                        <li><a class="link" href="https://dl.acm.org/citation.cfm?id=3300105">(Weir et al., SIGMOD 2019)</a>, Brown University & TU Darmstadt</li>
                        <li><a class="link" href="https://arxiv.org/abs/1902.00031">(Baik et al., ICDE 2019)</a>, U of Michigan & IBM</li>
                      </ol>
                    </div>
                    </p>
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
                       <th>Dev</th>
                       <th>Test</th>
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
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Example Split Results</h2>
                    </div>
                    <p align="left">
                    <div class="left"> For comparison, the models achieve much higher results if we split the dataset based on data examples instead of databases since the systems don't need to generalize to new database schemas.
                    </div>
                    </p>
                    <table class="table performanceTable">
                    <tr>
                       <th>Rank</th>
                       <th>Model</th>
                       <th>Exact Set Match</th>
                    </tr>
                    <tr>
                       <td>
                          <p>1</p>
                          <span class="date label label-default">Sep 20, 2018</span>
                       </td>
                       <td style="word-break:break-word;">
                          TypeSQL
                          <p class="institution">Yale University</p>
                          <a class="link" href="https://arxiv.org/abs/1804.09769">(Yu et al. NAACL '18)</a>
                       </td>
                       <td>33.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">Sep 20, 2018</span>
                       </td>
                       <td style="word-break:break-word;">
                          SQLNet
                          <p class="institution">Shanghai Jiao Tong University</p>
                          <a class="link" href="https://arxiv.org/abs/1711.04436">(Xu et al. '18)</a>
                       </td>
                       <td>18.3</td>
                    </tr>
                    <tr>
                       <td>
                          <p>3</p>
                          <span class="date label label-default">Sep 20, 2018</span>
                       </td>
                       <td style="word-break:break-word;">
                          Seq2Seq + attention
                          <p class="institution">University of Edinburgh</p>
                          <a class="link" href="https://arxiv.org/abs/1601.01280">(Dong and Lapata, 2016)</a>
                       </td>
                       <td>15.9</td>
                    </tr>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
