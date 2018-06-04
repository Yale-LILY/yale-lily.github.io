README

The classification dataset is derived from the AAN dataset. The AAN dataset
consists of Natural Language Processing (NLP) papers published in the ACL
anthology.  The AAN dataset can be found here.
http://tangra.cs.yale.edu/newaan/index.php/home/download

There are 380 papers classified into one of the following three classes:

1. Machine Translation 
2. Dependency Parsing 
3. Summarization

SELECTION PROCESS:

We chose a subset of papers in 3 topics (Machine Translation, Dependency
Parsing, Summarization) from the ACL anthology. These topics are three 
main research areas in Natural Language Processing (NLP). Specifically,
we collected all papers which were cited by papers whose titles
contain any of the following phrases, "Dependency Parsing", "Machine
Translation", "Summarization". From this list, we removed all the papers which
contained any of the above phrases in their title because this would make the
classification task easy. The pruned list contains 1190 papers. We manually
classified each paper into four classes (Dependency Parsing, Machine
Translation, Summarization, Other) by considering the full text of the paper.
The manually cleaned data set consists of 275 Machine Translation papers, 73
Dependency Parsing papers and 32 Summarization papers. 

FILES INCLUDED:

Here is a brief description of the directory structure and what is included in
the dataset

	aan_mds 
	| 
	|-----metadata.txt    Contains the id, title, authorship,
	|	    	      venue and the class name for all the papers.  
	| 
	|-----papers_text     This directory contains the full text of the 380
    |	    	      papers. We obtained this text by converting the
	|		      PDF of the paper to text using PDFBox.  
	|
	|-----citations.txt   The file contains citations between ALL the
       			      papers in the AAN data set not just the 
			      citations between the 380	papers in the dataset.
			      This is because many link/citation similarity
			      measures like cocitation or coupling compute
			      similarity between two papers using citations 
			      between other papers.
	  
FORMAT OF metadata.txt: 

The file contains 6 different fields delimited by the tab character for each
paper in its own line.  The first field contains the class information
denoted by a single character. "Machine Translation", "Dependency Parsing"
and "Parsing" are denoted by 'M', 'D' and 'S' respectively. The second field
is the ACL id of the paper and the third field is the title of the paper. 
The fourth field is the list of authors delimited by "; " unlesspreceded by a
";". The fifth field is the venue name and the last field is the year of 
publication.
