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
                    <div class="left"> <p style="color:red;">Feb. 5th, 2024: We will no longer accept submissions for Spider 1.0 evaluations or update its leaderboard. Look forward to the release of Spider 2.0, a more realistic and challenging benchmark in the era of LLMs, expected this <s>March</s> <b>June</b>. Stay tuned!</p>
                      Spider is a large-scale <a href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c"><i>complex and cross-domain</i></a> semantic parsing and text-to-SQL dataset annotated by 11 Yale students.
                      The goal of the Spider challenge is to develop natural language interfaces to cross-domain databases.
                       It consists of 10,181 questions and 5,693 unique complex SQL queries on 200 databases with multiple tables covering 138 different domains.
                       In Spider 1.0, different complex SQL queries and databases appear in train and test sets.
                       To do well on it, systems must <i>generalize well to not only new SQL queries but also new database schemas</i>.
                      <hr>Why we call it "Spider"? It is because our dataset is complex and cross-domain like a spider crawling across mutiple complex(with many foreign keys) nests(databases).
                       <a class="btn actionBtn2" href="https://www.xlang.ai/"> XLang Lab for building LM agents! </a>
                       <a class="btn actionBtn" href="https://arxiv.org/abs/1809.08887">Spider Paper (EMNLP'18)</a>
                       <a class="btn actionBtn" href="https://medium.com/@tao.yu/spider-one-more-step-towards-natural-language-interfaces-to-databases-62298dc6df3c">Spider Post</a>
                      <hr><b>Related works:</b> <a href="https://ds1000-code-gen.github.io/"><b><i>DS-1000</i></b></a>, <a href="https://lm-code-binder.github.io/"><b><i>Binder</i></b></a>, <a href="https://unifiedskg.com/"><b><i>UnifiedSKG</i></b></a>, multi-turn <a href="https://yale-lily.github.io/sparc"><b><i>SParC</i></b></a> and conversational <a href="https://yale-lily.github.io/cosql"><b><i>CoSQL</i></b></a> text-to-SQL tasks.
                       <a class="btn actionBtn2" href="https://ds1000-code-gen.github.io/">DS-1000 Challenge ('22)</a>
                       <a class="btn actionBtn2" href="https://lm-code-binder.github.io/">Binder Framework (ICLR '23)</a>
                       <a class="btn actionBtn2" href="https://github.com/hkunlp/unifiedskg">UnifiedSKG Framework (EMNLP'22)</a>
                       <a class="btn actionBtn2" href="https://yale-lily.github.io/sparc">SParC Challenge (ACL'19)</a>
                       <a class="btn actionBtn2" href="https://yale-lily.github.io/cosql">CoSQL Challenge (EMNLP'19)</a>
                    </div>
                    </p>
                    <div class="infoHeadline">
                       <h2>News</h2>
                    </div>
                    <p align="left">
                    <div class="left" style="background-color: #f5f5f5">
                       <ul>
                         <li><span class="label label-default" style="background-color: #FF7F50"><i>02/05/2024</i></span>
                             <p style="color:red;">We will no longer accept submissions for Spider 1.0 evaluations or update its leaderboard. The test set of Spider 1.0 has already been released (check the Spider dataset link below). Look forward to the release of Spider 2.0, a more realistic and challenging benchmark in the era of LLMs, expected this <s>March</s> <b>June</b>. Stay tuned!</p>
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>08/10/2023</i></span>
                             Please check out <a href="https://chat.xlang.ai/">XLang language model agents</a>!
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>05/27/2023</i></span>
                             Please check out <a href="https://openreview.net/pdf?id=Wc5bmZZU9cy">Dr.Spider, a robustness evaluation benchmark based on Spider, </a> from AWS AI Lab for studying robustness in semantic parsing!
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>11/20/2022</i></span>
                             Please check out our recent work <a href="https://ds1000-code-gen.github.io/">DS-1000: A Natural and Reliable Benchmark for Data Science Code Generation</a>. Please check out examples, data, and code on the <a href="https://ds1000-code-gen.github.io/">DS-1000 project site</a>!!
                         </li>
                         <li><span class="label label-default" style="background-color: #FF7F50"><i>10/18/2022</i></span>
                             Please check out our recent work <a href="https://lm-code-binder.github.io/">Binder: an easy but sota neural-symbolic built on GPT-3 Codex & SQL/Python interpreter</a>. It injects GPT-3 Codex prompt API calls in programming languages! Please check out Binder demo, code, paper, and video on the <a href="[https://github.com/hkunlp/unifiedskg](https://lm-code-binder.github.io/)">Binder project site</a>!!
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>01/18/2022</i></span>
                             Please check out our recent work <a href="https://arxiv.org/abs/2201.05966">UnifiedSKG: Unifying and Multi-Tasking Structured Knowledge Grounding with Text-to-Text Language Models</a>. We open-sourced simple but SOTA/strong models for 21 tasks including text-to-SQL! Please check out our code in the <a href="https://github.com/hkunlp/unifiedskg">UnifiedSKG repo</a>!!
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>03/11/2021</i></span>
                             Please check out <a href="https://arxiv.org/abs/2010.12725">a nice work</a> from Google Research (including <a href="https://github.com/google-research/language/tree/master/language/nqg">new Spider splits</a>) for studying compositional generalization in semantic parsing!
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>11/15/2020</i></span>
                             We will use <a href="https://arxiv.org/abs/2010.02840">Test Suite Accuracy</a> as our official evaluation metric for Spider, SParC, and CoSQL. Please find the evaluation code from <a href="https://github.com/taoyds/test-suite-sql-eval">here</a>. Also, Notice that Test results after May 02, 2020 are reported on the new release (collected some annotation errors).
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>08/03/2020</i></span>
                             Corrected "column_name" and "column_name_original" mismatches in 2 dbs ("scholar" and "formula_1") in tables.json, and reparsed SQL queries (this only affects some models (e.g. RATSQL) which use our parsed SQL as the SQL input). Please download the Spider dataset from this page again.
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>06/07/2020</i></span>
                             We corrected some annotation errors and label mismatches (not errors) in Spider dev and test sets (~4% of dev examples updated, click <a href="https://github.com/taoyds/spider/commit/25fcd85d9b6e94acaeb5e9172deadeefeed83f5e#diff-18b0a730a7b0d29b0a78a5070d971d49">here</a> for more details). Please download the Spider dataset from this page again.
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>01/16/2020</i></span>
                             For value prediction (in order to compute the execution accuracy), your model should be able to 1) copy from the question inputs, 2) retrieve from the database content (database content is available), or 3) generate numbers (e.g. 3 in "LIMIT 3").
                         </li>
                         <li><span class="label label-default" style="background-color: #286dc0"><i>9/24/2019</i></span>
                             <a href="https://frcchang.github.io/pub/emnlp2019.2.pdf">(Min et al., EMNLP 2019)</a> translated Spider to Chinese! Check out <a href="https://taolusi.github.io/CSpider-explorer/">the Chinese challenge page</a>.
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
                    <div class="left"> The data is split into training, development, and test sets. Download a copy of the dataset (distributed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode">CC BY-SA 4.0</a> license):
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://drive.google.com/u/0/uc?id=1iRDVHLr4mX2wQKSgA9J8Pire73Jahh0m&export=download" download>Spider Dataset</a>
                    Details of baseline models and evaluation script can be found on the following GitHub site:
                    <a class="btn actionBtn inverseBtn" href="https://github.com/taoyds/spider" download>Spider GitHub Page</a>
                   <!---- 
                   <p align="left">
                    <div class="left">Once you have built a model that works to your expectations on the dev set,
                       you can submit it to get official scores on the dev and a hidden test set. To preserve the
                       integrity of test results, we do not release the test set to the public. Instead, we request
                       you to submit your model so that we can run it on the test set for you. Here's a tutorial walking you through official evaluation of your model:
                    </div>
                    </p>
                    <a class="btn actionBtn inverseBtn" href="https://worksheets.codalab.org/worksheets/0x82150f426cb94c17b861ef4162817399/" download>Submission Tutorial</a>
                   ----->
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
                       <h2>Leaderboard - Execution with Values</h2>
                    </div>
                    <p align="left">
                    <div class="left"> Our current models do not predict any value in SQL conditions so that we do not provide execution accuracies. However, we encourage you to provide it in the future submissions. For value prediction, your model should be able to 1) copy from the question inputs, 2) retrieve from the database content (database content is available), or 3) generate numbers (e.g. 3 in "LIMIT 3"). <i>Notice: </i> Test results after May 02, 2020 are reported on the new release (collected some annotation errors).
                    </div>
                    </p>
                    <table class="table performanceTable">
                    <tr>
                       <th>Rank</th>
                       <th>Model</th>
                       <th>Test</th>
                    </tr>
                    <tr>
                       <td>
                          <p>1</p>
                          <span class="date label label-default">Nov 2, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          MiniSeek
                          <p class="institution">Anonymous</p> 
                          <span>Code and paper coming soon</span>
                       </td>
                       <td><b>91.2</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>1</p>
                          <span class="date label label-default">Aug 20, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          DAIL-SQL + GPT-4 + Self-Consistency
                          <p class="institution">Alibaba Group</p> 
                          <a class="link" href="https://arxiv.org/abs/2308.15363">(Gao and Wang et al.,'2023)</a>
                          <a class="link" href="https://github.com/BeachWang/DAIL-SQL">code</a>
                       </td>
                       <td><b>86.6</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>2</p>
                          <span class="date label label-default">Aug 9, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          DAIL-SQL + GPT-4
                          <p class="institution">Alibaba Group</p> 
                          <a class="link" href="https://arxiv.org/abs/2308.15363">(Gao and Wang et al.,'2023)</a>
                          <a class="link" href="https://github.com/BeachWang/DAIL-SQL">code</a>
                       </td>
                       <td><b>86.2</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>3</p>
                          <span class="date label label-default">October 17, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          DPG-SQL + GPT-4 + Self-Correction
                          <p class="institution">Anonymous</p>
                          <span>Code and paper coming soon</span>
                       </td>
                       <td>85.6</td>
                    </tr>
                    <tr>
                       <td>
                          <p>4</p>
                          <span class="date label label-default">Apr 21, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          DIN-SQL + GPT-4
                          <p class="institution">University of Alberta</p> 
                          <a class="link" href="https://arxiv.org/abs/2304.11015">(Pourreza et al.,'2023)</a>
                          <a class="link" href="https://github.com/MohammadrezaPourreza/Few-shot-NL2SQL-with-prompting">code</a>
                       </td>
                       <td>85.3</td>
                    </tr>
                    <tr>
                       <td>
                          <p>5</p>
                          <span class="date label label-default">July 5, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          Hindsight Chain of Thought with GPT-4
                          <p class="institution">Anonymous</p> 
                          <span>Code and paper coming soon</span>
                       </td>
                       <td>83.9</td>
                    </tr>
                    <tr>
                       <td>
                          <p>6</p>
                          <span class="date label label-default">Jun 1, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          C3 + ChatGPT + Zero-Shot
                          <p class="institution">Zhejiang University & Hundsun</p> 
                          <a class="link" href="https://arxiv.org/abs/2307.07306">(Dong et al.,'2023)</a>
                          <a class="link" href="https://github.com/bigbigwatermalon/C3SQL">code</a>
                       </td>
                       <td><b>82.3</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>7</p>
                          <span class="date label label-default">July 5, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          Hindsight Chain of Thought with GPT-4 and Instructions
                          <p class="institution">Anonymous</p>
                          <span>Code and paper coming soon</span>
                       </td>
                       <td>80.8</td>
                    </tr>
                    <tr>
                       <td>
                          <p>8</p>
                          <span class="date label label-default">Feb 7, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          RESDSQL-3B + NatSQL (DB content used)
                          <p class="institution">Renmin University of China</p>
                          <a class="link" href="https://arxiv.org/abs/2302.05965">(Li et al., AAAI'23)</a>
                          <a class="link" href="https://github.com/RUCKBReasoning/RESDSQL">code</a>
                       </td>
                       <td><b>79.9</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>9</p>
                          <span class="date label label-default">Nov 21, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          SeaD + PQL (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>78.5</td>
                    </tr>
                    <tr>
                       <td>
                          <p>10</p>
                          <span class="date label label-default">Apr 21, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          DIN-SQL + CodeX
                          <p class="institution">University of Alberta</p>
                          <a class="link" href="https://arxiv.org/abs/2304.11015">(Pourreza et al.,'2023)</a>
                          <a class="link" href="https://github.com/MohammadrezaPourreza/Few-shot-NL2SQL-with-prompting">code</a>
                       </td>
                       <td><b>78.2</b></td>
                    </tr>
                    <tr>
                       <td>
                          <p>11</p>
                          <span class="date label label-default">August 10, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          T5-3B+NatSQL+Token Preprocessing (DB content used)
                          <p class="institution">George Mason University & MIT</p>
                          <a class="link" href="https://arxiv.org/abs/2305.17378">(Rai et al., ACL '23)</a>
                          <a class="link" href="https://github.com/Dakingrai/ood-generalization-semantic-boundary-techniques">code</a>
                       </td>
                       <td>78.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>12</p>
                          <span class="date label label-default">Sep 14, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          CatSQL + GraPPa (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>78.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>13</p>
                          <span class="date label label-default">Sep 13, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          Graphix-3B+PICARD (DB content used)
                          <p class="institution">Alibaba DAMO & HKU STAR & SIAT</p>
                          <a class="link" href="https://arxiv.org/abs/2301.07507">(Li et al., AAAI'2023)</a>
                          <a class="link" href="https://github.com/AlibabaResearch/DAMO-ConvAI/tree/main/graphix">code</a>
                       </td>
                       <td>77.6</td>
                    </tr>
                    <tr>
                       <td>
                          <p>14</p>
                          <span class="date label label-default">Sep 1, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          SHiP+PICARD (DB content used)
                          <p class="institution">AWS AI Labs</p>
                          <a class="link" href="https://arxiv.org/pdf/2212.08785.pdf">(Zhao et al.,'22)</a>
                       </td>
                       <td>76.6</td>
                    </tr>
                    <tr>
                       <td>
                          <p>15</p>
                          <span class="date label label-default">Apr 4, 2023</span>
                       </td>
                       <td style="word-break:break-word;">
                          RASAT + NatSQL + Reranker (DB content used)
                          <p class="institution">Anonymous</p>
                          <span>Paper coming soon</span>
                       </td>
                       <td>76.5</td>
                    </tr>
                    <tr>
                       <td>
                          <p>16</p>
                          <span class="date label label-default">Dec 15, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          N-best List Rerankers + PICARD (DB content used)
                          <p class="institution">Alexa AI</p>
                          <a class="link" href="https://arxiv.org/abs/2210.10668">(Zeng et al., IEEE SLT 2023)</a>
                       </td>
                       <td>75.9</td>
                    </tr>                     
                    <tr>
                       <td>
                          <p>17</p>
                          <span class="date label label-default">Jun 4, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          RASAT+PICARD (DB content used)
                          <p class="institution">SJTU LUMIA & Netmind.AI </p>
                          <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                          <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                       </td>
                       <td>75.5</td>
                    </tr>
                    <tr>
                       <td>
                          <p>18</p>
                          <span class="date label label-default">May 8, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          T5-SR (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>75.2</td>
                    </tr>
                    <tr>
                       <td>
                          <p>19</p>
                          <span class="date label label-default">Aug 12, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          RESDSQL+T5-1.1-lm100k-xl (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>75.1</td>
                    </tr>
                    <tr>
                       <td>
                          <p>20</p>
                          <span class="date label label-default">Jul 14, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          T5-3B+PICARD (DB content used)
                          <p class="institution">Element AI, a ServiceNow company</p>
                          <a class="link" href="https://arxiv.org/abs/2109.05093">(Scholak et al., EMNLP'21)</a>
                          <a class="link" href="https://github.com/ElementAI/picard">code</a>
                       </td>
                       <td>75.1</td>
                    </tr>
                    <tr>
                       <td>
                          <p>21</p>
                          <span class="date label label-default">Aug 12, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          RESDSQL+T5-1.1-lm100k-large (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>74.8</td>
                    </tr>
                    <tr>
                       <td>
                          <p>22</p>
                          <span class="date label label-default">May 18, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          SeaD + SP (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>74.1</td>
                    </tr>
                    <tr>
                       <td>
                          <p>23</p>
                          <span class="date label label-default">May 4, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          RATSQL+GAP+NatSQL (DB content used)
                          <p class="institution">Queen Mary University of London</p>
                          <a class="link" href="https://arxiv.org/abs/2109.05153">(Gan et al., EMNLP Findings'21)</a>
                          <a class="link" href="https://github.com/ygan/NatSQL">code</a>
                       </td>
                       <td>73.3</td>
                    </tr>
                    <tr>
                       <td>
                          <p>24</p>
                          <span class="date label label-default">August 10, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          T5-Base+NatSQL+Token Preprocessing (DB content used)
                          <p class="institution">George Mason University & MIT</p>
                          <a class="link" href="https://arxiv.org/abs/2305.17378">(Rai et al., ACL '23)</a>
                          <a class="link" href="https://github.com/Dakingrai/ood-generalization-semantic-boundary-techniques">code</a>
                       </td>
                       <td>71.1</td>
                    </tr>
                    <tr>
                       <td>
                          <p>25</p>
                          <span class="date label label-default">Mar 10, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          SmBoP + GraPPa (DB content used)
                          <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                          <a class="link" href="https://arxiv.org/abs/2010.12412">(Rubin and Berant, NAACL'21)</a>
                          <a class="link" href="https://github.com/OhadRubin/SmBop">code</a>
                       </td>
                       <td>71.1</td>
                    </tr>
                    <tr>
                       <td>
                          <p>26</p>
                          <span class="date label label-default">Aug 05, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          RaSaP + ELECTRA (DB content used)
                          <p class="institution">Ant Group, ZhiXiaoBao & Ada</p>
                          <a class="link" href="https://arxiv.org/abs/2108.00804">(Huang et al.,'21)</a>
                       </td>
                       <td>70.0</td>
                    </tr>
                    <tr>
                       <td>
                          <p>27</p>
                          <span class="date label label-default">Nov 24, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          BRIDGE v2 + BERT(ensemble) (DB content used)
                          <p class="institution">Salesforce Research</p>
                          <a class="link" href="https://arxiv.org/pdf/2012.12627.pdf">(Lin et al., EMNLP-Findings '20)</a>
                          <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                       </td>
                       <td>68.3</td>
                    </tr>
                    <tr>
                       <td>
                          <p>28</p>
                          <span class="date label label-default">Jan 16, 2021</span>
                       </td>
                       <td style="word-break:break-word;">
                          COMBINE (DB content used)
                          <p class="institution">Novelis.io Research</p>
                          <a class="link" href="https://novelisconsulting-my.sharepoint.com/personal/ymellah_novelis_io/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fymellah%5Fnovelis%5Fio%2FDocuments%2Farticles%2FCOMBINE%5FText%5Fto%5FSQL%2Epdf&parent=%2Fpersonal%2Fymellah%5Fnovelis%5Fio%2FDocuments%2Farticles&originalPath=aHR0cHM6Ly9ub3ZlbGlzY29uc3VsdGluZy1teS5zaGFyZXBvaW50LmNvbS86YjovZy9wZXJzb25hbC95bWVsbGFoX25vdmVsaXNfaW8vRVdEeUgxM0s3ZnBNbG1TVGdvYnd2STBCOUpRSUJfOFgxVHcyTFJ1MkJVSndFUT9ydGltZT1LVDdMM2lQbDJFZw">(Youssef et al.,'21)</a>
                       </td>
                       <td>68.2</td>
                    </tr>
                    <tr>
                       <td>
                          <p>29</p>
                          <span class="date label label-default">Jul 22, 2022</span>
                       </td>
                       <td style="word-break:break-word;">
                          T5QL-Base (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>66.8</td>
                    </tr>  
                    <tr>
                       <td>
                          <p>30</p>
                          <span class="date label label-default">Nov 24, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          BRIDGE v2 + BERT (DB content used)
                          <p class="institution">Salesforce Research</p>
                          <a class="link" href="https://arxiv.org/pdf/2012.12627.pdf">(Lin et al., EMNLP-Findings '20)</a>
                          <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                       </td>
                       <td>64.3</td>
                    </tr>
                    <tr>
                       <td>
                          <p>31</p>
                          <span class="date label label-default">May 30, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          AuxNet + BART (DB content used)
                          <p class="institution">Anonymous</p>
                       </td>
                       <td>62.6</td>
                    </tr>
                    <tr>
                       <td>
                          <p>32</p>
                          <span class="date label label-default">May 30, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          BRIDGE + BERT (DB content used)
                          <p class="institution">Salesforce Research</p>
                          <a class="link" href="https://www.aclweb.org/anthology/2020.findings-emnlp.438/">(Lin et al., EMNLP-Findings '20)</a>
                          <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                       </td>
                       <td>59.9</td>
                    </tr>
                    <tr>
                       <td>
                          <p>33</p>
                          <span class="date label label-default">May 20, 2020</span>
                       </td>
                       <td style="word-break:break-word;">
                          GAZP + BERT (DB content used)
                          <p class="institution">University of Washington & Facebook AI Research</p>
                          <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                       </td>
                       <td>53.5</td>
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
                    <div class="left">For exact matching evaluation, instead of simply conducting string comparison between the predicted and gold SQL queries, we decompose each SQL into several clauses, and conduct set comparison in each SQL clause. Please refer to the paper and <a href="https://github.com/taoyds/spider/tree/master/evaluation_examples">the Github page</a> for more details. <i>Notice: </i> Test results after May 02, 2020 are reported on the new release (collected some annotation errors).
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
                              <span class="date label label-default">Nov 2, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              MiniSeek
                              <p class="institution">Anonymous</p>
                              <span>Code and paper coming soon</span>
                           </td>
                           <td>80.3</td>
                           <td><b>81.5</b></td>
                       </tr>
                      <tr>
                           <td>
                              <p>1</p>
                              <span class="date label label-default">Sep 13, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              Graphix-3B + PICARD (DB content used)
                              <p class="institution">Alibaba DAMO & HKU STAR & SIAT</p>
                              <a class="link" href="https://arxiv.org/abs/2301.07507">(Li et al., AAAI'2023)</a>
                              <a class="link" href="https://github.com/AlibabaResearch/DAMO-ConvAI/tree/main/graphix">code</a>
                           </td>
                           <td>77.1</td>
                           <td><b>74.0</b></td>
                       </tr>
                       <tr>
                           <td>
                              <p>2</p>
                              <span class="date label label-default">Sep 14, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              CatSQL + GraPPa (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>78.6</td>
                           <td>73.9</td>
                       </tr>
                       <tr>
                           <td>
                              <p>3</p>
                              <span class="date label label-default">Sep 1, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              SHiP + PICARD (DB content used)
                              <p class="institution">AWS AI Labs</p>
                              <a class="link" href="https://arxiv.org/pdf/2212.08785.pdf">(Zhao et al.,'22)</a>
                           </td>
                           <td>77.2</td>
                           <td>73.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>4</p>
                              <span class="date label label-default">May 23, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              G³R + LGESQL + ELECTRA (DB content used)
                              <p class="institution">Southeast University & Tencent Cloud Xiaowei</p>
                              <a class="link" href="https://aclanthology.org/2023.findings-acl.23/">(Xiang et al., ACL-Findings '23)</a>
                           </td>
                           <td>78.1</td>
                           <td>72.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>6</p>
                              <span class="date label label-default">Aug 12, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              RESDSQL+T5-1.1-lm100k-xl (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>78.1</td>
                           <td>72.4</td>
                        </tr>
                        <tr>
                             <td>
                                <p>6</p>
                                <span class="date label label-default">May 8, 2022</span>
                             </td>
                             <td style="word-break:break-word;">
                                T5-SR (DB content used)
                                <p class="institution">Anonymous</p>
                             </td>
                             <td>77.2</td>
                             <td>72.4</td>
                          </tr>
                        <tr>
                           <td>
                              <p>7</p>
                              <span class="date label label-default">Dec 15, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              N-best List Rerankers + PICARD (DB content used)
                              <p class="institution">Alexa AI</p>
                              <a class="link" href="https://arxiv.org/abs/2210.10668">(Zeng et al., IEEE SLT 2023)</a>
                           </td>
                           <td>76.4</td>
                           <td>72.2</td>
                         </tr>
                          <tr>
                             <td>
                                <p>8</p>
                                <span class="date label label-default">Sep 1, 2021</span>
                             </td>
                             <td style="word-break:break-word;">
                                S²SQL + ELECTRA (DB content used)
                                <p class="institution">Alibaba DAMO</p>
                                <a class="link" href="https://arxiv.org/abs/2203.06958">(Hui et al., ACL-Findings '22)</a>
                                <a class="link" href="https://github.com/AlibabaResearch/DAMO-ConvAI/tree/main/s2sql">code</a>
                             </td>
                             <td>76.4</td>
                             <td>72.1</td>
                         </tr>
                         <tr>
                           <td>
                              <p>9</p>
                              <span class="date label label-default">Feb 7, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              RESDSQL-3B + NatSQL (DB content used)
                              <p class="institution">Renmin University of China</p>
                              <a class="link" href="https://arxiv.org/abs/2302.05965">(Li et al., AAAI'23)</a>
                              <a class="link" href="https://github.com/RUCKBReasoning/RESDSQL">code</a>
                           </td>
                           <td>80.5</td>
                           <td>72.0</td>
                        </tr>
                         <tr>
                           <td>
                              <p>10</p>
                              <span class="date label label-default">Jun 1, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              LGESQL + ELECTRA (DB content used)
                              <p class="institution">SJTU X-LANCE Lab & AISpeech</p>
                              <a class="link" href="https://arxiv.org/abs/2106.01093">(Cao et al., ACL'21)</a>
                              <a class="link" href="https://github.com/rhythmcao/text2sql-lgesql">code</a>
                           </td>
                           <td>75.1</td>
                           <td>72.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>11</p>
                              <span class="date label label-default">Jul 14, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              T5-3B+PICARD (DB content used)
                              <p class="institution">Element AI, a ServiceNow company</p>
                              <a class="link" href="https://arxiv.org/abs/2109.05093">(Scholak et al., EMNLP'21)</a>
                              <a class="link" href="https://github.com/ElementAI/picard">code</a>
                           </td>
                           <td>75.5</td>
                           <td>71.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>12</p>
                              <span class="date label label-default">Aug 12, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              RESDSQL+T5-1.1-lm100k-large (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>76.6</td>
                           <td>71.1</td>
                        </tr>
                        <tr>
                             <td>
                                <p>13</p>
                                <span class="date label label-default">Jun 4, 2022</span>
                             </td>
                             <td style="word-break:break-word;">
                                RASAT+PICARD (DB content used)
                              <p class="institution">SJTU LUMIA & Netmind.AI </p>
                              <a class="link" href="https://arxiv.org/abs/2205.06983">(Qi et al., EMNLP'22)</a>
                              <a class="link" href="https://github.com/JiexingQi/RASAT">code</a>
                             </td>
                             <td>75.3</td>
                             <td>70.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>14</p>
                              <span class="date label label-default">Nov 19, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              DT-Fixup SQL-SP + RoBERTa (DB content used)
                              <p class="institution">Borealis AI</p>
                              <a class="link" href="http://arxiv.org/abs/2012.15355">(Xu et al., ACL'21)</a>
                              <a class="link" href="https://github.com/BorealisAI/DT-Fixup">code</a>
                           </td>
                           <td>75.0</td>
                           <td>70.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>15</p>
                              <span class="date label label-default">Nov 19, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RAT-SQL + GraPPa + Adv (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>75.5</td>
                           <td>70.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>16</p>
                              <span class="date label label-default">Oct 18, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL++ + ELECTRA (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>75.7</td>
                           <td>70.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>17</p>
                              <span class="date label label-default">Nov 19, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              SADGA + GAP (DB content used)
                              <p class="institution">DMIR Lab</p>
                              <a class="link" href="https://arxiv.org/abs/2111.00653">(Cai and Yuan et al., NeurIPS'21)</a>
                              <a class="link" href="https://github.com/DMIRLAB-Group/SADGA">code</a>
                           </td>
                           <td>73.1</td>
                           <td>70.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>18</p>
                              <span class="date label label-default">Dec 25, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL + GraPPa + GP (DB content used)
                              <p class="institution">OCFT Gamma Big Data Lab</p>
                              <a class="link" href="https://arxiv.org/abs/2101.09901">(Zhao et al.,'21)</a>
                           </td>
                           <td>72.8</td>
                           <td>69.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>19</p>
                              <span class="date label label-default">Sep 08, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL + GAP (DB content used)
                              <p class="institution">University of Waterloo & AWS AI Labs</p>
                              <a class="link" href="https://arxiv.org/abs/2012.10309">(Shi et al., AAAI'21)</a>
                              <a class="link" href="https://github.com/awslabs/gap-text2sql">code</a>
                           </td>
                           <td>71.8</td>
                           <td>69.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>20</p>
                              <span class="date label label-default">Apr 4, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              RASAT + NatSQL + Reranker (DB content used)
                              <p class="institution">Anonymous</p>
                              <span>Paper coming soon</span>
                           </td>
                           <td>73.6</td>
                           <td>69.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>20</p>
                              <span class="date label label-default">Aug 18, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL + GraPPa (DB content used)
                              <p class="institution">Yale & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/2009.13845">(Yu et al., ICLR'21)</a>
                              <a class="link" href="">code</a>
                           </td>
                           <td>73.4</td>
                           <td>69.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>22</p>
                              <span class="date label label-default">Mar 10, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              SmBoP + GraPPa (DB content used)
                              <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/abs/2010.12412">(Rubin and Berant, NAACL'21)</a>
                              <a class="link" href="https://github.com/OhadRubin/SmBop">code</a>
                           </td>
                           <td>74.7</td>
                           <td>69.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>23</p>
                              <span class="date label label-default">Aug 05, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              RaSaP + ELECTRA (DB content used)
                              <p class="institution">Ant Group, ZhiXiaoBao & Ada</p>
                              <a class="link" href="https://arxiv.org/abs/2108.00804">(Huang et al.,'21)</a>
                           </td>
                           <td>74.7</td>
                           <td>69.0</td>
                        </tr>
                        <tr>
                         <td>
                            <p>24</p>
                            <span class="date label label-default">May 4, 2021</span>
                         </td>
                         <td style="word-break:break-word;">
                            RATSQL+GAP+NatSQL (DB content used)
                            <p class="institution">Queen Mary University of London</p>
                            <a class="link" href="https://arxiv.org/abs/2109.05153">(Gan et al., EMNLP Findings'21)</a>
                            <a class="link" href="https://github.com/ygan/NatSQL">code</a>
                         </td>
                         <td>-</td>
                         <td>68.7</td>
                      </tr>
                        <tr>
                           <td>
                              <p>25</p>
                              <span class="date label label-default">Nov 20, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RAT-SQL + STRUG (DB content used)
                              <p class="institution">Microsoft Research & OSU</p>
                              <a class="link" href="https://arxiv.org/pdf/2010.12773.pdf">(Deng et al., NAACL '21)</a>
                           </td>
                           <td>72.6</td>
                           <td>68.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>26</p>
                              <span class="date label label-default">Jun 1, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              LGESQL + BERT (DB content used)
                              <p class="institution">SJTU X-LANCE Lab & AISpeech</p>
                              <a class="link" href="https://arxiv.org/abs/2106.01093">(Cao et al., ACL'21)</a>
                              <a class="link" href="https://github.com/rhythmcao/text2sql-lgesql">code</a>
                           </td>
                           <td>74.1</td>
                           <td>68.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>27</p>
                              <span class="date label label-default">Jan 16, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              COMBINE (DB content used)
                              <p class="institution">Novelis.io Research</p>
                              <a class="link" href="https://novelisconsulting-my.sharepoint.com/personal/ymellah_novelis_io/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fymellah%5Fnovelis%5Fio%2FDocuments%2Farticles%2FCOMBINE%5FText%5Fto%5FSQL%2Epdf&parent=%2Fpersonal%2Fymellah%5Fnovelis%5Fio%2FDocuments%2Farticles&originalPath=aHR0cHM6Ly9ub3ZlbGlzY29uc3VsdGluZy1teS5zaGFyZXBvaW50LmNvbS86YjovZy9wZXJzb25hbC95bWVsbGFoX25vdmVsaXNfaW8vRVdEeUgxM0s3ZnBNbG1TVGdvYnd2STBCOUpRSUJfOFgxVHcyTFJ1MkJVSndFUT9ydGltZT1LVDdMM2lQbDJFZw">(Youssef et al.,'21)</a>
                           </td>
                           <td>71.4</td>
                           <td>67.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>28</p>
                              <span class="date label label-default">Nov 24, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              BRIDGE v2 + BERT(ensemble) (DB content used)
                              <p class="institution">Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/pdf/2012.12627.pdf">(Lin et al., EMNLP-Findings '20)</a>
                              <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                           </td>
                           <td>71.1</td>
                           <td>67.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>29</p>
                              <span class="date label label-default">Sep. 8, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              ShadowGNN + RoBERTa (DB content used)
                              <p class="institution">SJTU X-LANCE Lab & AISpeech</p>
                              <a class="link" href="https://arxiv.org/pdf/2104.04689.pdf">(Chen et al., NAACL'21)</a>
                           </td>
                           <td>72.3</td>
                           <td>66.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>30</p>
                              <span class="date label label-default">Jul. 22, 2022</span>
                           </td>
                           <td style="word-break:break-word;">
                              T5QL-Base (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>69.3</td>
                           <td>65.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>31</p>
                              <span class="date label label-default">May 02, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL v3 + BERT (DB content used)
                              <p class="institution">Microsoft Research</p>
                              <a class="link" href="https://arxiv.org/abs/1911.04942">(Wang and Shin et al., ACL '20)</a>
                              <a class="link" href="https://github.com/Microsoft/rat-sql">code</a>
                           </td>
                           <td>69.7</td>
                           <td>65.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>32</p>
                              <span class="date label label-default">Dec. 07, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              DuoRAT + BERT (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>65.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>33</p>
                              <span class="date label label-default">Sep. 8, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              YCSQL + BERT (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>65.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>34</p>
                              <span class="date label label-default">Jan. 29, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              ETA + BERT (DB content used)
                              <p class="institution">Microsoft Research Asia</p>
                              <a class="link" href="https://aclanthology.org/2021.findings-acl.100.pdf">(Liu et al., ACL-Findings '21)</a>
                           </td>
                           <td>70.8</td>
                           <td>65.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>35</p>
                              <span class="date label label-default">Nov 24, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              BRIDGE v2 + BERT (DB content used)
                              <p class="institution">Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/pdf/2012.12627.pdf">(Lin et al., EMNLP-Findings '20)</a>
                              <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                           </td>
                           <td>70.0</td>
                           <td>65.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>36</p>
                              <span class="date label label-default">October 17, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              DPG-SQL + GPT-4 + Self-Correction
                              <p class="institution">Anonymous</p>
                              <span>Code and paper coming soon</span>
                           </td>
                           <td>-</td>
                           <td>64.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>37</p>
                              <span class="date label label-default">Sep. 8, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              GP-RATSQL + BERT (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>64.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>38</p>
                              <span class="date label label-default">Nov. 25, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL-HPFT + BERT (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>64.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>39</p>
                              <span class="date label label-default">Feb 2, 2021</span>
                           </td>
                           <td style="word-break:break-word;">
                              LGESQL + GLOVE (DB content used)
                              <p class="institution">SJTU X-LANCE Lab & AISpeech</p>
                              <a class="link" href="https://arxiv.org/abs/2106.01093">(Cao et al., ACL'21)</a>
                              <a class="link" href="https://github.com/rhythmcao/text2sql-lgesql">code</a>
                           </td>
                           <td>67.6</td>
                           <td>62.8</td>
                        </tr>
                        <tr>
                           <td>
                              <p>40</p>
                              <span class="date label label-default">May 31, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              AuxNet + BART (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>70.0</td>
                           <td>61.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>41</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL v2 + BERT (DB content used)
                              <p class="institution">Microsoft Research</p>
                              <a class="link" href="https://arxiv.org/abs/1911.04942">(Wang and Shin et al., ACL '20)</a>
                              <a class="link" href="https://github.com/Microsoft/rat-sql">code</a>
                           </td>
                           <td>65.8</td>
                           <td>61.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>42</p>
                              <span class="date label label-default">May 31, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              AuxNet + BART
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>68.0</td>
                           <td>61.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>43</p>
                              <span class="date label label-default">Feb 18, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              RYANSQL v2 + BERT
                              <p class="institution">Kakao Enterprise</p>
                              <a class="link" href="https://arxiv.org/abs/2004.03125">(Choi et al., '20)</a>
                           </td>
                           <td>70.6</td>
                           <td>60.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>44</p>
                              <span class="date label label-default">Oct 19, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              SmBoP + BART
                              <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/abs/2010.12412">(Rubin and Berant '20)</a>
                           </td>
                           <td>66.0</td>
                           <td>60.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>45</p>
                              <span class="date label label-default">Dec 18, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet++ + XLNet (DB content used)
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>65.5</td>
                           <td>60.1</td>
                        </tr>
                        <tr>
                           <td>
                              <p>46</p>
                              <span class="date label label-default">Apr 21, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              DIN-SQL + GPT-4
                             <p class="institution">University of Alberta</p>
                             <a class="link" href="https://arxiv.org/abs/2304.11015">(Pourreza et al.,'2023)</a>
                             <a class="link" href="https://github.com/MohammadrezaPourreza/Few-shot-NL2SQL-with-prompting">code</a>
                           </td>
                           <td>60.1</td>
                           <td>60</td>
                        </tr>
                        <tr>
                           <td>
                              <p>47</p>
                              <span class="date label label-default">May 30, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              BRIDGE + BERT (DB content used)
                              <p class="institution">Salesforce Research</p>
                              <a class="link" href="https://www.aclweb.org/anthology/2020.findings-emnlp.438/">(Lin et al., EMNLP-Findings '20)</a>
                              <a class="link" href="https://github.com/salesforce/TabularSemanticParsing">code</a>
                           </td>
                           <td>65.5</td>
                           <td>59.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>48</p>
                              <span class="date label label-default">Nov 12, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              RYANSQL + BERT
                              <p class="institution">Kakao Enterprise</p>
                              <a class="link" href="https://arxiv.org/abs/2004.03125">(Choi et al., '20)</a>
                           </td>
                           <td>66.6</td>
                           <td>58.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>49</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              RATSQL v2 (DB content used)
                              <p class="institution">Microsoft Research</p>
                              <a class="link" href="https://arxiv.org/abs/1911.04942">(Wang and Shin et al., ACL '20)</a>
                              <a class="link" href="https://github.com/Microsoft/rat-sql">code</a>
                           </td>
                           <td>62.7</td>
                           <td>57.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>50</p>
                              <span class="date label label-default">Apr 21, 2023</span>
                           </td>
                           <td style="word-break:break-word;">
                              DIN-SQL + CodeX
                              <p class="institution">University of Alberta</p>
                              <a class="link" href="https://arxiv.org/abs/2304.11015">(Pourreza et al.,'2023)</a>
                              <a class="link" href="https://github.com/MohammadrezaPourreza/Few-shot-NL2SQL-with-prompting">code</a>
                           </td>
                           <td>57.2</td>
                           <td>57</td>
                        </tr>
                        <tr>
                           <td>
                              <p>51</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              SLSQL + BERT + Data Annotation
                              <p class="institution">National University of Singapore</p>
                              <a class="link" href="https://www.aclweb.org/anthology/2020.emnlp-main.564/">(Lei and Wang et al., EMNLP '20)</a>
                              <a class="link" href="https://github.com/WING-NUS/slsql">code</a>
                           </td>
                           <td>60.8</td>
                           <td>55.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>52</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL+LSL + BERT
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>57.9</td>
                           <td>55.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>53</p>
                              <span class="date label label-default">June 24, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet v2 + BERT
                              <p class="institution">Microsoft Research Asia</p>
                           </td>
                           <td>63.9</td>
                           <td>55.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>54</p>
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
                              <p>55</p>
                              <span class="date label label-default">May 19, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet + BERT
                              <p class="institution">Microsoft Research Asia</p>
                              <a class="link" href="https://arxiv.org/abs/1905.08205">(Guo and Zhan et al., ACL '19)</a>
                              <a class="link" href="https://github.com/microsoft/IRNet">code</a>
                           </td>
                           <td>61.9</td>
                           <td>54.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>56</p>
                              <span class="date label label-default">Nov 4, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GNN + Bertrand-DR
                              <p class="institution">Got It R&D</p>
                              <a class="link" href="https://arxiv.org/abs/2002.00557">(Kelkar et al., '20)</a>
                              <a class="link" href="https://github.com/amolk/Bertrand-DR">code</a>
                           </td>
                           <td>57.9</td>
                           <td>54.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>57</p>
                              <span class="date label label-default">Apr 8, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              CNSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>58.0</td>
                           <td>54.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>58</p>
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
                              <p>59</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL + BERT
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>57.6</td>
                           <td>53.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>60</p>
                              <span class="date label label-default">May 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              GAZP + BERT
                              <p class="institution">University of Washington & Facebook AI Research</p>
                              <a class="link" href="https://arxiv.org/abs/2009.07396">(Zhong et al., EMNLP '20)</a>
                           </td>
                           <td>-</td>
                           <td>53.3</td>
                        </tr>
                        <tr>
                           <td>
                              <p>61</p>
                              <span class="date label label-default">May 21, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              NatSQL v3
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>53.2</td>
                        </tr>
                        <tr>
                           <td>
                              <p>62</p>
                              <span class="date label label-default">May 28, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNET+ GNN
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>49.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>63</p>
                              <span class="date label label-default">June 24, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet v2
                              <p class="institution">Microsoft Research Asia</p>
                           </td>
                           <td>55.4</td>
                           <td>48.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>64</p>
                              <span class="date label label-default">Aug 30, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              Global-GNN (DB content used)
                              <p class="institution">Tel-Aviv University & Allen Institute for AI</p>
                              <a class="link" href="https://arxiv.org/pdf/1908.11214">(Bogin et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/benbogin/spider-schema-gnn-global">code</a>
                           </td>
                           <td>52.7</td>
                           <td>47.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>65</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              LSL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>56.8</td>
                           <td>47.0</td>
                        </tr>
                        <tr>
                           <td>
                              <p>66</p>
                              <span class="date label label-default">Apr 5, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              GraphSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>52.8</td>
                           <td>46.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>67</p>
                              <span class="date label label-default">May 19, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              IRNet
                              <p class="institution">Microsoft Research Asia</p>
                              <a class="link" href="https://arxiv.org/abs/1905.08205">(Guo and Zhan et al., ACL '19)</a>
                              <a class="link" href="https://github.com/microsoft/IRNet">code</a>
                           </td>
                           <td>53.2</td>
                           <td>46.7</td>
                        </tr>
                        <tr>
                           <td>
                              <p>68</p>
                              <span class="date label label-default">Mar 17, 2020</span>
                           </td>
                           <td style="word-break:break-word;">
                              SG-IRNet
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>-</td>
                           <td>46.6</td>
                        </tr>
                        <tr>
                           <td>
                              <p>69</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              NatSQL v2
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>52.0</td>
                           <td>46.4</td>
                        </tr>
                        <tr>
                           <td>
                              <p>70</p>
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
                              <p>71</p>
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
                              <p>72</p>
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
                              <p>73</p>
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
                              <p>74</p>
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
                              <p>75</p>
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
                              <p>76</p>
                              <span class="date label label-default">Sep 1, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              EditSQL
                              <p class="institution">Yale University & Salesforce Research</p>
                              <a class="link" href="https://arxiv.org/abs/1909.00786">(Zhang et al., EMNLP '19)</a>
                              <a class="link" href="https://github.com/ryanzhumich/editsql">code</a>
                           </td>
                           <td>36.4</td>
                           <td>32.9</td>
                        </tr>
                        <tr>
                           <td>
                              <p>77</p>
                              <span class="date label label-default">Dec 13, 2019</span>
                           </td>
                           <td style="word-break:break-word;">
                              GuideSQL
                              <p class="institution">Anonymous</p>
                           </td>
                           <td>36.8</td>
                           <td>31.5</td>
                        </tr>
                        <tr>
                           <td>
                              <p>78</p>
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
                              <p>79</p>
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
                              <p>80</p>
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
                              <p>81</p>
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
                              <p>82</p>
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
                              <p>83</p>
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
                    <div class="left"> <b>Other papers used Spider (evaluated on the dev but not test set):</b>
                      <ol>
                        <li><a class="link" href="https://arxiv.org/abs/2206.14017">(Wang et al., KDD 2022)</a>, Alibaba DAMO</li>
                        <li><a class="link" href="http://vldb.org/pvldb/vol15/p569-ma.pdf">(Ma et al., VLDB 2022)</a>, HKUST</li>
                        <li><a class="link" href="https://aclanthology.org/2022.coling-1.471/">(Qin et al., COLING 2022)</a>, Alibaba DAMO</li>
                        <li><a class="link" href="https://dl.acm.org/doi/10.14778/3446095.3446103">(Usta et al., VLDB 2021)</a>, Bilkent University</li>
                        <li><a class="link" href="https://frcchang.github.io/pub/emnlp2019.2.pdf">(Min et al., EMNLP 2019)</a>, Westlake University, Spider in Chinese</li>
                        <li><a class="link" href="http://web.cse.ohio-state.edu/~sun.397/docs/MISP.pdf">(Yao et al., EMNLP 2019)</a>, OSU & Facebook AI Research</li>
                        <li><a class="link" href="https://arxiv.org/abs/1905.08407">(Shaw et al., ACL 2019)</a>, Google</li>
                        <li><a class="link" href="https://arxiv.org/abs/1906.10816">(Shin et al., NeurlPS 2019)</a>, UC Berkeley & MSR</li>
                        <li><a class="link" href="https://dl.acm.org/citation.cfm?id=3300105">(Weir et al., SIGMOD 2019)</a>, Brown University & TU Darmstadt</li>
                        <li><a class="link" href="https://arxiv.org/abs/1902.00031">(Baik et al., ICDE 2019)</a>, U of Michigan & IBM</li>
                      </ol>
                    </div>
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
