README

This C++ package can be used to compute the similarity between two different
strings. The similarity measures included are

1. Cosine Similarity 
2. Jaccard Similarity 
3. Length-weighted Kernel 
4. P-Spectrum Kernel 
5. Levenshtein Similarity

INSTALLATION

The code has some external dependencies that are also included as part of the
package. So, a simple make command at the terminal prompt should be enough to
compile the package.

USAGE

All the similarity measures are written inside the Similarity class and can be
used after creating an object of the class. 

The different methods that can be invoked to compute the similarity measures
are as follows

1. s.CosineSimilarity(string1, string2) 
2. s.LengthWeightedKernel(string1, string2) 
3. s.JaccardSimilarity(string1, string2) 
4. s.PSpectrumKernel(string1, string2) 
5. s.LevenshteinSimilarity(string1, string2)

There is also an example file, compute_similarity.cpp, which shows how the
similarity measures can be invoked.  The example script computes the similarity
between strings in two files. The code can be run as follows

./compute_similarity text_file1 text_file2

The code computes the similarity between strings in text_file1 and strings in
text_file2 and outputs the similarity for all pairs of strings. 

INPUT FORMAT

The input text files should be formatted as follows

id1\tstring1 id2\tstring2 ...

Each string and the corresponding id should be mentioned on its own line.  The
id and the actual string should be delimited by a tab character.

OUTPUT FORMAT

The code outputs to the standard output as follows

id1\tid2\tsimilarity_score id3\tid4\tsimilarity_score ...

The similarity between the strings corresponding to id1 and id2 are outputted
in the first line and so on. All the different fields are tab-delimited.

