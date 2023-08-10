---
layout: sparc
permalink: sparc
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
                 SParC
                 <b>1.0</b>
                 <img src="/images/sparc_logo.png" alt="test image" height="100">
              </h1>
           </div>
           <h2 id="appSubtitle">Yale & Salesforce Semantic Parsing and Text-to-SQL in Context Challenge</h2>
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
                       <h2>What is SParC?</h2>
                    </div>
                    <p align="left">
                    <div class="left"><b><i>SParC</i></b> is a dataset for cross-domain <b>S</b>emantic <b>Par</b>sing in <b>C</b>ontext. It is the context-dependent/multi-turn version of the <a href="https://yale-lily.github.io/spider"><b><i>Spider task</i></b></a>, a complex and cross-domain text-to-SQL challenge. SParC consists of 4,298 coherent question sequences (12k+ unique individual questions annotated with SQL queries annotated by 14 Yale students), obtained from user interactions with 200 complex databases over 138 domains.
                    </div>
                    <a class="btn actionBtn2" href="https://www.xlang.ai/"> XLang Lab for building LM agents! </a>
		    <a class="btn actionBtn" href="https://arxiv.org/abs/1906.02285">SParC Paper (ACL'19)</a>
                    <a class="btn actionBtn" href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">SParC Post</a>
                    <hr><b>Related works:</b> <a href="https://ds1000-code-gen.github.io/"><b><i>DS-1000</i></b></a>, <a href="https://lm-code-binder.github.io/"><b><i>Binder</i></b></a>, <a href="https://unifiedskg.com/"><b><i>UnifiedSKG</i></b></a>, single-turn <a href="https://yale-lily.github.io/spider"><b><i>Spider</i></b></a> and conversational <a href="https://yale-lily.github.io/cosql"><b><i>CoSQL</i></b></a> text-to-SQL tasks.
	            <a class="btn actionBtn2" href="https://ds1000-code-gen.github.io/">DS-1000 Challenge ('22)</a>
	            <a class="btn actionBtn2" href="https://lm-code-binder.github.io/">Binder Framework (ICLR '23)</a>
	            <a class="btn actionBtn2" href="https://github.com/hkunlp/unifiedskg">UnifiedSKG Framework (EMNLP '22)</a>
                    <a class="btn actionBtn2" href="https://yale-lily.github.io/spider">Spider Chanllenge (EMNLP'18)</a>
                    <a class="btn actionBtn2" href="https://yale-lily.github.io/cosql">CoSQL Chanllenge (EMNLP'19)</a>
                    </p>
                    <div class="infoHeadline">
                       <h2>News</h2>
                    </div>
                    <p align="left">
                    <div class="left" style="background-color: #f5f5f5">
                       <ul>
			 <li><span class="label label-default" style="background-color: #286dc0"><i>08/10/2023</i></span>
                             Please check out <a href="https://chat.xlang.ai/">XLang language model agents</a>!
                         </li>
			 <li><span class="label label-default" style="background-color: #FF7F50"><i>11/20/2022</i></span>
                             Please check out our recent work <a href="https://ds1000-code-gen.github.io/">DS-1000: A Natural and Reliable Benchmark for Data Science Code Generation</a>. Please check out examples, data, and code on the <a href="https://ds1000-code-gen.github.io/">DS-1000 project site</a>!!
                         </li>
			 <li><span class="label label-default" style="background-color: #FF7F50"><i>10/18/2022</i></span>
                             Please check out our recent work <a href="https://lm-code-binder.github.io/">Binder: an easy but sota neural-symbolic built on GPT-3 Codex & SQL/Python interpreter</a>. It injects GPT-3 Codex prompt API calls in programming languages! Please check out Binder demo, code, paper, and video on the <a href="https://github.com/hkunlp/unifiedskg">Binder project site</a>!!
                         </li>
			 <li><span class="label label-default" style="background-color: #FF7F50"><i>02/15/2022</i></span>
			   Please check out our recent work <a href="https://arxiv.org/abs/2201.05966">UnifiedSKG: Unifying and Multi-Tasking Structured Knowledge Grounding with Text-to-Text Language Models</a>. We open-sourced simple but SOTA/strong models for 21 tasks including text-to-SQL! Please check out our code in the <a href="https://github.com/hkunlp/unifiedskg">UnifiedSKG repo</a>!!
		         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>11/15/2020</i></span>
                             We will use <a href="https://arxiv.org/abs/2010.02840">Test Suite Accuracy</a> as our official evaluation metric for Spider, SParC, and CoSQL. Please find the evaluation code from <a href="https://github.com/taoyds/test-suite-sql-eval">here</a>.
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>5/17/2019</i></span>
                             Our paper <a href="https://arxiv.org/abs/1906.02285">SParC: Cross-Domain Semantic Parsing in Context</a> with Salesforce Research was accepted to ACL 2019!
                          </li>
                       </ul>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>Why SParC?</h2>
                    </div>
                    <p align="left">
                    <div class="left">
                       SParC is built upon the Spider dataset. Comparing to other existing context-dependent semantic parsing/text-to-SQL datasets such as ATIS, it demonstrates:
                       <ul>
                          <li>complex contextual dependencies (annotated by 15 Yale computer science students)</li>
                          <li>has greater semantic diversity due to complex coverage of SQL logic patterns in the Spider dataset.</li>
                          <li>requires generalization to new domains due to its cross-domain nature and the unseen databasest time.</li>
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
                    <a class="btn actionBtn inverseBtn" href="https://drive.google.com/uc?export=download&id=1Uu7NMHTR1tdQw1t7bAuM7OPU4LElVKfg" download>SParC Dataset</a>
                    Details of baseline models and evaluation script can be found on the following GitHub site:
                    <a class="btn actionBtn inverseBtn" href="https://github.com/taoyds/sparc" download>SParC GitHub Page</a>
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
                    <img src="/images/sparc_example1.png" alt="test image">
                    Another example:
                    <img src="/images/sparc_example2.png" alt="test image">
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
                    <div class="left">We thank <a href="http://www.cs.cornell.edu/~tianze/">Tianze Shi</a> and the anonymous reviewers for their precious comments on this project and <a href="http://www.melvingruesbeck.com/">Melvin Gruesbeck</a> for designing the nice example illustrations. Also, we thank <a href="https://rajpurkar.github.io/">Pranav Rajpurkar</a> for giving us the permission to build this website based on <a href="https://rajpurkar.github.io/SQuAD-explorer/">SQuAD</a>. .
                    </div>
                    </p>
                    <p align="left">
                    <div class="left">Part of our SParC team at <a href="https://yins.yale.edu/">YINS</a>:
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
                       <h2>Leaderboard - Execution with Values</h2>
                    </div>
                    <p align="left">
                    <div class="left"> Our current models do not predict any value in SQL conditions so that we do not provide execution accuracies. However, we encourage you to provide it in the future submissions. For value prediction, your model should be able to 1) copy from the question inputs, 2) retrieve from the database content (database content is available), or 3) generate numbers (e.g. 3 in "LIMIT 3").
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
                          <span class="date label label-default">Jun 4, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          RASAT + PICARD
                          <p class="institution">SJTU LUMIA & Netmind.AI </p>
                          <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                          <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                       </td>
                       <td><b>74.0</b></td>
                       <td><b>52.6</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">May 24, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          TreeSQL V2 + BERT
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>48.5</td>
                       <td>21.6</td>
                    </tr>
                    <tr>
                       <td>
                          <p>3</p>
                          <span class="date label label-default">May 21, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          GAZP + BERT
                          <p class="institution">University of Washington & Facebook AI Research</p>
                          <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                       </td>
                       <td>44.6</td>
                       <td>19.7</td>
                    </tr>
                    </table>
                 </div>
              </div>
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
                           <td>67.4</td>
                           <td><b>46.6</b></td>
                        </tr>
         <tr>
                           <td>
                              <p>2</p>
                              <span class="date label label-default">Jun 4, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              RASAT + PICARD
                          <p class="institution">SJTU LUMIA & Netmind.AI </p>
                          <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                          <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                           </td>
                           <td>67.7</td>
                           <td>45.2</td>
                        </tr>
			<tr>
                           <td>
                              <p>3</p>
                              <span class="date label label-default">Apr 27, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              CQR-SQL
                              <p class="institution">Tencent Cloud Xiaowei</p>
                              <a class="link" href="https://arxiv.org/abs/2205.07686">(Xiao et al.,'22)</a>
                           </td>  
                           <td><b>68.2</b></td>
                           <td>44.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>4</p>
                              <span class="date label label-default">Oct 8, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              RAT-SQL-TC + GAP
			      <p class="institution">Meituan & PKU</p>
                              <a class="link" href="https://arxiv.org/abs/2112.08735">(Li et al.,'21)</a>
                           </td>  
                           <td>65.7</td>
                           <td>43.2</td>
                        </tr>
			               <tr>
                           <td>
                              <p>5</p>
                              <span class="date label label-default">Oct 18, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              HIE-SQL + GraPPa
                              <p class="institution">Alibaba DAMO</p>
                              <a class="link" href="https://arxiv.org/abs/2203.07376">(Zheng et al. ACL-Findings '22)</a>
                           </td>
                           <td>64.6</td>
                           <td>42.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>6</p>
                              <span class="date label label-default">Sep. 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RAT-SQL + SCoRe
                              <p class="institution">Yale & Microsoft Research & PSU</p>
                              <a class="link" href="https://openreview.net/forum?id=oyZxhRI2RiE">(Yu et al. ICLR '21)</a>
                           </td>
                           <td>62.4</td>
                           <td>38.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>7</p>
                              <span class="date label label-default">Oct 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              WaveSQL+BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>58.7</td>
                           <td>33.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>8</p>
                              <span class="date label label-default">July 08, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              R²SQL + BERT
                              <p class="institution">Alibaba DAMO</p>
                              <a class="link" href="http://arxiv.org/abs/2101.01686">(Hui et al. AAAI '21)</a>
                              <a class="link" href="https://github.com/huybery/r2sql">code</a>
                           </td>
                           <td>55.8</td>
                           <td>30.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>9</p>
                              <span class="date label label-default">May 26, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              IGSQL + BERT
                              <p class="institution">Peking University</p>
                              <a class="link" href="https://www.aclweb.org/anthology/2020.emnlp-main.560/">(Cai et al. EMNLP '20)</a>
                              <a class="link" href="https://github.com/headacheboy/IGSQL">code</a>
                           </td>
                           <td>51.2</td>
                           <td>29.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>10</p>
                              <span class="date label label-default">Jun. 02, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              MIE + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>49.6</td>
                           <td>27.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>11</p>
                              <span class="date label label-default">May 04, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              SubTreeSQL + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>47.4</td>
                           <td>25.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>12</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL + BERT
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al. EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>47.9</td>
                           <td>25.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>13</p>
                              <span class="date label label-default">May 03, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              TreeSQL V2 + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>48.1</td>
                           <td>25.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>14</p>
                              <span class="date label label-default">May 22, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              MH-LTA + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>48.5</td>
                           <td>24.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>15</p>
                              <span class="date label label-default">Jan 15, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              TreeSQL + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>46.3</td>
                           <td>24.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>16</p>
                              <span class="date label label-default">May 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              GAZP + BERT
                              <p class="institution">University of Washington & Facebook AI Research</p>
                              <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                           </td>
                           <td>45.9</td>
                           <td>23.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>17</p>
                              <span class="date label label-default">Feb 13, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              ConcatSQL + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>46.3</td>
                           <td>22.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>18</p>
                              <span class="date label label-default">Apr 21, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              MemCE
                              <p class="institution">UoE</p>
                              <a class="link" href="https://direct.mit.edu/tacl/article/doi/10.1162/tacl_a_00422/108200/Memory-Based-Semantic-Parsing">(Jain et al., TACL '21)</a>
                           </td>
                           <td>40.3</td>
                           <td>16.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>19</p>
                              <span class="date label label-default">Feb 13, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              ConcatSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>39.0</td>
                           <td>16.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>20</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GuideSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>34.4</td>
                           <td>13.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>21</p>
                              <span class="date label label-default">May 17, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              CD-Seq2Seq
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1906.02285">(Yu et al. ACL '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>23.2</td>
                           <td>7.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>22</p>
                              <span class="date label label-default">May 17, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              SyntaxSQL-con
                              <p class="institution">Yale University</p>
                              <a class="link" href="https://arxiv.org/abs/1810.05237">(Yu et al. EMNLP '18)</a>
                              <a class="link" href="https://github.com/taoyds/syntaxSQL">code</a>
                           </td>
                           <td>20.2</td>
                           <td>5.2</td>
                        </tr>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
