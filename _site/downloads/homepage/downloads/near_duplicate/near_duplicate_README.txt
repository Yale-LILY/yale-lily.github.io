README

This package is used to find clusters of near duplicate documents in a large
corpus using shingling. Below is an example of near duplicates

Example 1

1. C++ (pronounced "see plus plus") is a statically typed, free-form,
multi-paradigm, compiled, general-purpose programming language. It is regarded
as an intermediate-level language, as it comprises a combination of both
high-level and low-level language features.

2. C++ (pronounced "see plus plus") is a statically typed, compiled,
general purpose programming language. It is regarded as an intermediate level
language, as it comprises a combination of both high-level and low-level
language features.

The code essentially computes the set of n-grams in all documents and computes
the Jaccard coefficient between the sets of ngrams in the two documents.

INSTALLATION

The code includes packages from the boost library for matrix computations,
handling program arguments, etc. Make sure to install the boost library before
compiling this package. Also, modify the path mentioned in the second line of
the Makefile to the home directory of the boost library.

The package can be easily compiled using the simple "make" command.

RUNNING THE CODE

The make outputs the main executable clusterShingles which can be used as
follows to cluster a set of tweets.

./clusterShingles [OPTIONS] --meta_file filename.txt

ALLOWED OPTIONS

1) --help

Produces a help message with a description of the allowed options.

2) --similarity_th arg

The similarity_threshold for two tweets to be considered near-duplicates,
defaults to 0.75

3) --shingle_size arg

The size of shingles, by default it is set to 3 (trigrams).

4) --number_hashes arg
The number of hash functions used for computing the Jaccard similarity,
defaults to 100

5) --maxWordsInADocumentFromBeginning arg

The maximum number of words in a document from the beginning. This option
is useful when you want to find the near duplicates using the top few
sentences in documents alone. Defaults to 500.

6) --minClusterSize arg

Minimum number of near-duplicates to be considered a cluster. Defaults to 4.

7) --dump_sim Outputs the similarity values computed between the tweets if set
to true. Defaults to false.

8) --meta_file filename.txt

The file containing the tweets to be clustered. 

INPUT FORMAT

The file should consist of two fields in each line. The first field should 
correspond to the id of the tweet while the second field should contain the 
tweet.

OUTPUT FORMAT

The code outputs the total number of clusters in the first line. Then, for
each cluster, the size of the cluster, the documents in the cluster are
printed to the standard output. 
