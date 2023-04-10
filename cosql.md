---
layout: cosql
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
                 <img src="/images/yale_logo.png" alt="test image" height="60">
                 <img src="/images/salesforce_logo.png" alt="test image" height="65">
                 CoSQL
                 <b>1.0</b>
                 <img src="/images/cornell_logo.png" alt="test image" height="70">
                 <img src="/images/umichi_logo.png" alt="test image" height="70">
              </h1>
           </div>
           <h2 id="appSubtitle">A Conversational Text-to-SQL Challenge <br>Towards Cross-Domain Natural Language Interfaces to Databases</h2>
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
                    <div class="left"><b><i>CoSQL</i></b> is a corpus for building cross-domain <b>Co</b>nversational text-to-<b>SQL</b> systems. It is the dialogue version of the <a href="https://yale-lily.github.io/spider"><b><i>Spider</i></b></a> and <a href="https://yale-lily.github.io/sparc"><b><i>SParC</i></b></a> tasks. CoSQL consists of 30k+ turns plus 10k+ annotated SQL queries, obtained from a <a href="https://en.wikipedia.org/wiki/Wizard_of_Oz_experiment">Wizard-of-Oz</a> collection of 3k dialogues querying 200 complex databases spanning 138 domains. Each dialogue simulates a real-world DB query scenario with a crowd worker as a user exploring the database and a SQL expert retrieving answers with SQL, clarifying ambiguous questions, or otherwise informing of unanswerable questions.
                    </div>
                    <a class="btn actionBtn" href="https://arxiv.org/abs/1909.05378">CoSQL Paper (EMNLP'19)</a>
                    <a class="btn actionBtn" href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">CoSQL Post</a>
                    <hr><b>Related works</b>: <a href="https://ds1000-code-gen.github.io/"><b><i>DS-1000</i></b></a>, <a href="https://lm-code-binder.github.io/"><b><i>Binder</i></b></a>, <a href="https://unifiedskg.com/"><b><i>UnifiedSKG</i></b></a>, single-turn <a href="https://yale-lily.github.io/spider"><b><i>Spider</i></b></a> and multi-turn <a href="https://yale-lily.github.io/sparc"><b><i>SParC</i></b></a> text-to-SQL tasks
			<a class="btn actionBtn2" href="https://ds1000-code-gen.github.io/">DS-1000 Challenge ('22)</a>
			<a class="btn actionBtn2" href="https://lm-code-binder.github.io/">Binder Framework (ICLR '23)</a>
			<a class="btn actionBtn2" href="https://github.com/hkunlp/unifiedskg">UnifiedSKG Framework (EMNLP '22)</a>
                        <a class="btn actionBtn2" href="https://yale-lily.github.io/spider">Spider Chanllenge (EMNLP'18)</a>
                        <a class="btn actionBtn2" href="https://yale-lily.github.io/sparc">SParC Chanllenge (ACL'19)</a>
                    </p>
                    <div class="infoHeadline">
                       <h2>News</h2>
                    </div>
                    <p align="left">
                    <div class="left" style="background-color: #f5f5f5">
                       <ul>
			 <li><span class="label label-default" style="background-color: #FF7F50"><i>11/20/2022</i></span>
                             Please check out our recent work <a href="https://ds1000-code-gen.github.io/">DS-1000: A Natural and Reliable Benchmark for Data Science Code Generation</a>. Please check out examples, data, and code on the <a href="https://ds1000-code-gen.github.io/">DS-1000 project site</a>!!
                         </li>
			 <li><span class="label label-default" style="background-color: #FF7F50"><i>10/18/2022</i></span>
                             Please check out our recent work <a href="https://lm-code-binder.github.io/">Binder: an easy but sota neural-symbolic built on GPT-3 Codex & SQL/Python interpreter</a>. It injects GPT-3 Codex prompt API calls in programming languages! Please check out Binder demo, code, paper, and video on the <a href="https://github.com/hkunlp/unifiedskg">Binder project site</a>!!
                         </li>
			 <li><span class="label label-default" style="background-color: #286dc0"><i>02/15/2022</i></span>
			   Please check out our recent work <a href="https://arxiv.org/abs/2201.05966">UnifiedSKG: Unifying and Multi-Tasking Structured Knowledge Grounding with Text-to-Text Language Models</a>. We open-sourced simple but SOTA/strong models for 21 tasks including text-to-SQL! Please check out our code in the <a href="https://github.com/hkunlp/unifiedskg">UnifiedSKG repo</a>!!
		         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>11/15/2020</i></span>
                             We will use <a href="https://arxiv.org/abs/2010.02840">Test Suite Accuracy</a> as our official evaluation metric for Spider, SParC, and CoSQL. Please find the evaluation code from <a href="https://github.com/taoyds/test-suite-sql-eval">here</a>.
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>01/16/2020</i></span>
                             Added some supplemental files to the CoSQL dataset (No change to the data content for each task).
                          </li>
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
                    <a class="btn actionBtn inverseBtn" href="https://drive.google.com/uc?export=download&id=1Y3ydpFiQQ3FC0bzdfy3groV95O_f1nXF" download>CoSQL Dataset</a>
                    Details of baseline models and evaluation script can be found on the following GitHub site:
                    <a class="btn actionBtn inverseBtn" href="https://github.com/taoyds/cosql" download>CoSQL GitHub Page</a>
                    <p align="left">
                    <div class="left">Once you have built a model that works to your expectations on the dev set,
                       you can submit it to get official scores on the dev and a hidden test set. To preserve the
                       integrity of test results, we do not release the test set to the public. Instead, we request
                       you to submit your model so that we can run it on the test set for you. Here's a tutorial walking you through official evaluation of your model:
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://worksheets.codalab.org/worksheets/0x308e69603f284587aab34b8c09aee4f1" download>Submission Tutorial</a>
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
              </div>
           </div>
           <div class="col-md-7">
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - SQL-grounded Dialogue State Tracking</h2>
                    </div>
                    <p align="left">
                    <div class="left">In CoSQL, user dialogue states are grounded in SQL queries. Dialogue state tracking (DST) in this case is to predict the correct SQL query for each user utterance with <code>INFORM_SQL</code> label given the interaction context and the DB schema. Comparing to other context-dependent text-to-SQL tasks such as <a href="https://yale-lily.github.io/sparc"><i>SParC</i></a>, the DST task in CoSQL also includes the ambiguous questions if the user affirms the system clarification of them. In this case, the system clarification is also given as part of the interaction context to predict the SQL query corresponding to the question. As in <a href="https://yale-lily.github.io/spider"><i>Spider</i></a> and <a href="https://yale-lily.github.io/sparc"><i>SParC</i></a> tasks, we report results of <b>Exact Set Match without Values</b>:
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
                              <span class="date label label-default">Feb 14, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              STAR
                              <p class="institution">Alibaba DAMO & SIAT</p>
			      <a class="link" href="https://arxiv.org/abs/2210.11888">(Cai and Li et al., EMNLP-Findings '22)</a>
			      <a class="link" href="https://github.com/AlibabaResearch/DAMO-ConvAI/tree/main/star">code</a>
			      <a class="link" href="https://modelscope.cn/models/damo/nlp_star_conversational-text-to-sql/summary">demo</a>
                           </td>
			   <td>57.8</td>
                           <td><b>28.2</b></td>
                        </tr>
			<tr>
                           <td>
                              <p>2</p>
                              <span class="date label label-default">Apr 2, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              CQR-SQL
                              <p class="institution">Tencent Cloud Xiaowei</p>
                              <a class="link" href="https://arxiv.org/abs/2205.07686">(Xiao et al.,'22)</a>
                           </td>
			   <td><b>58.3</b></td>
                           <td>27.4</td>
                        </tr>
			<tr>
                           <td>
                              <p>3</p>
                              <span class="date label label-default">Jun 4, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              RASAT + PICARD 
                          <p class="institution">SJTU LUMIA & Netmind.AI </p>
                          <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                          <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                           </td>
                           <td>55.7</td>
                           <td>26.5</td>
                        </tr>
			<tr>
                           <td>
                              <p>4</p>
                              <span class="date label label-default">Dec 26, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              MT Training + N-best List Rerankers + PICARD
                              <p class="institution">Alexa AI</p>
			      <a class="link" href="https://www.amazon.science/publications/conversational-text-to-sql-an-odyssey-into-state-of-the-art-and-challenges-ahead">(Parthasarathi et al., ICASSP'23)</a>
                           </td>
                           <td>55.8</td>
                           <td>24.8</td>
                        </tr>
			<tr>
                           <td>
                              <p>5</p>
                              <span class="date label label-default">Oct 5, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              HIE-SQL + GraPPa 
                              <p class="institution">Alibaba DAMO</p>
                              <a class="link" href="https://arxiv.org/abs/2203.07376">(Zheng et al. ACL-Findings '22)</a>
                           </td>
                           <td>53.9</td>
                           <td>24.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>6</p>
                              <span class="date label label-default">Jul 14, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              T5-3B+PICARD 
                              <p class="institution">Element AI, a ServiceNow company</p>
                              <a class="link" href="https://arxiv.org/abs/2109.05093">(Scholak et al., EMNLP'21)</a>
                              <a class="link" href="https://github.com/ElementAI/picard">code</a>
                           </td>
                           <td>54.6</td>
                           <td>23.7</td>
                        </tr>
			<tr>
                           <td>
                              <p>7</p>
                              <span class="date label label-default">Jan 7, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL++ + ELECTRA
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>53.8</td>
                           <td>22.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>8</p>
                              <span class="date label label-default">Sep. 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RAT-SQL + SCoRe 
                              <p class="institution">Yale & Microsoft Research & PSU</p>
                              <a class="link" href="https://openreview.net/forum?id=oyZxhRI2RiE">(Yu et al. ICLR '21)</a>
                           </td>
                           <td>51.6</td>
                           <td>21.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>9</p>
                              <span class="date label label-default">Aug 24, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              R²SQL + BERT
                              <p class="institution">Alibaba DAMO</p>
                              <a class="link" href="http://arxiv.org/abs/2101.01686">(Hui et al. AAAI '21)</a>
                              <a class="link" href="https://github.com/huybery/r2sql">code</a>
                           </td>
                           <td>46.8</td>
                           <td>17.0</td>
                        </tr> 
                        <tr>
                           <td>
                              <p>10</p>
                              <span class="date label label-default">Jan 26, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              IST-SQL + BERT
                              <p class="institution">University of Science and Technology of China</p>
                              <a class="link" href="https://arxiv.org/pdf/2012.04995.pdf">(Wang et al. AAAI '21)</a>
                              <a class="link" href="https://github.com/runzewang/IST-SQL">code</a>
                           </td>
                           <td>41.8</td>
                           <td>15.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>11</p>
                              <span class="date label label-default">Nov. 16, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              WaveSQL + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>46.1</td>
                           <td>15.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>12</p>
                              <span class="date label label-default">May 26, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              IGSQL + BERT
                              <p class="institution">Peking University</p>
                              <a class="link" href="https://www.aclweb.org/anthology/2020.emnlp-main.560/">(Cai et al. EMNLP '20)</a>
                              <a class="link" href="https://github.com/headacheboy/IGSQL">code</a>
                           </td>
                           <td>42.5</td>
                           <td>15.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>13</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL + BERT
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al. EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>40.8</td>
                           <td>13.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>14</p>
                              <span class="date label label-default">May 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              GAZP + BERT
                              <p class="institution">University of Washington & Facebook AI Research</p>
                              <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                           </td>
                           <td>39.7</td>
                           <td>12.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>15</p>
                              <span class="date label label-default">Apr 21, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              MemCE
                              <p class="institution">UoE</p>
                              <a class="link" href="https://direct.mit.edu/tacl/article/doi/10.1162/tacl_a_00422/108200/Memory-Based-Semantic-Parsing">(Jain et al., TACL '21)</a>
                           </td>
                           <td>28.4</td>
                           <td>6.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>16</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              CD-Seq2Seq
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.05378">(Yu et al. EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>13.9</td>
                           <td>2.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>17</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              SyntaxSQL-con
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1810.05237">(Yu et al. EMNLP '18)</a>
                              <a class="link" href="https://github.com/taoyds/syntaxSQL">code</a>
                           </td>
                           <td>14.1</td>
                           <td>2.2</td>
                        </tr>
                    </table>
                    <div class="left"> and <b>Execution with Values</b>:
                    </div>
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
                          <span class="date label label-default">Jun 4, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          RASAT + PICARD
                          <p class="institution">SJTU LUMIA & Netmind.AI </p>
                          <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                          <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                       </td>
                       <td><b>66.3</b></td>
                       <td><b>37.4</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">May 21, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          GAZP + BERT
                          <p class="institution">University of Washington & Facebook AI Research</p>
                          <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                       </td>
                       <td>35.9</td>
                       <td>8.4</td>
                    </tr>
                    </table>
                 </div>
              </div>
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - Response Generation from SQL and Query Results</h2>
                    </div>
                    <p align="left">
                    <div class="left"> This task requires generating a natural language description of the SQL query and the result for each system response labeled as <code>INFORM_SQL</code>. It considers a SQL query, the execution result, and the DB schema. Preserving logical consistency (Logic Correctness Rate (LCR)) between SQL and NL response is crucial in this task, in addition to naturalness and syntactical correctness.
                    </div>
                    </p>
                    <table class="table performanceTable">
                    <tr>
                       <th>Rank</th>
                       <th>Model</th>
                       <th>BLEU</th>
                       <th>Grammar</th>
                       <th>LCR (%)</th>
                    </tr>
                    <tr>
                       <td>
                          <p>1</p>
                          <span class="date label label-default">Dec 15, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          Complexity Aware Prompts + T5
			  <p class="institution">Alexa AI</p>
                       </td>
                       <td>28.1</td>
                       <td>-</td>
                       <td>-</td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">Aug 30, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          Template baseline
                       </td>
                       <td>9.3</td>
                       <td>4.0</td>
                       <td>41.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>3</p>
                          <span class="date label label-default">Aug 30, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          Pointer-generator baseline
                       </td>
                       <td>15.1</td>
                       <td>3.6</td>
                       <td>35.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>4</p>
                          <span class="date label label-default">Aug 30, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          Seq2Seq baseline
                       </td>
                       <td>14.1</td>
                       <td>3.5</td>
                       <td>27.0</td>
                    </tr>
                    </table>
                 </div>
              </div>
              <div class="infoCard">
                 <div class="infoBody">
                    <div class="infoHeadline">
                       <h2>Leaderboard - User Dialogue Act Prediction</h2>
                    </div>
                    <p align="left">
                    <div class="left"> For a real-world DB querying dialogue system, it has to decide if the user question can be mapped to a SQL query or if special actions are needed. We define a series of dialogue acts for the DB user and the SQL expert (refer to the paper for more details). For example, if the user question can be answered by a SQL query, the dialogue act of the question is <code>INFORM_SQL</code>.
                    </div>
                    </p>
                    <table class="table performanceTable">
                    <tr>
                       <th>Rank</th>
                       <th>Model</th>
                       <th>Accuracy</th>
                    </tr>
                    <tr>
                       <td>
                          <p>1</p>
                          <span class="date label label-default">Dec 20, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          UTran-SQL
                       </td>
                       <td><b>87.2</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">Aug 30, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          TBCNN-pair baseline
                       </td>
                       <td>83.9</td>
                    </tr>
                    <tr>
                       <td>
                          <p>3</p>
                          <span class="date label label-default">Aug 30, 2019</span>
                       </td>
                       <td style="word-break:break-word;">
                          Majority baseline
                       </td>
                       <td>62.8</td>
                    </tr>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
