README

Node similarity measures refers to computing similarity between two objects when 
represented using graphs. The objects are represented as nodes and an edge
represents a relation between the objects. 

This package implements node similarity algorithms described in the following papers

1. G. Jeh and J. Widom. SimRank: a measure of structural-context similarity. In
KDD'02: Proceedings of the eighth ACM SIGKDD international conference on
Knowledge discovery and data mining, pages 538-543. ACM Press, 2002.  

2. David Harel , Yehuda Koren, Clustering spatial data using random walks,
Proceedings of the seventh ACM SIGKDD international conference on
Knowledge discovery and data mining, p.281-286, August 26-29, 2001, San
Francisco, California 

INSTALLATION

We have included a Makefile along with the package and the code does not have 
any external dependencies. Therefore the code can be compiled using  the make
command at the terminal prompt. 


EXECUTION

You can run the code to compute random walk based similarity as follows

./random_walk_similarity input_graph_file k 

The SimRank similarity can be computed as follows
./simrank input_graph_file num_iterations

INPUT FORMAT

The first argument to both programs is the input graph and it should be formatted
as follows

Number of vertices should be mentioned on the first line, followed by edges on
each line.  Each edge should be formatted as 
Node_label1\tNode_label2\tWeight

The second parameter to the random walk similarity measure, K specifies the 
length of the random walk to be performed.

The second parameter to the SimRank similarity measure, num_iterations
specifies the number of iterations to run the simrank equations.


OUTPUT FORMAT

The code outputs the similarity values between the nodes as follows
Node_label1tNode_label2tSimilarity_score


BRIEF EXPLANATION

SimRank

SimRank is a general similarity measure, based on a simple
and intuitive graph-theoretic model. SimRank is applicable in any domain with
object-to-object relationships, that measures similarity of the structural
context in which objects occur, based on their relationships with other
objects. Effectively, SimRank is a measure that says "two objects are similar
if they are related to similar objects."

Random Walk Similarity
neighborhoods
The Harel and Koren's similarity measure works using a fairly simple idea using
random walks. Starting from node v, we perform a random walk for k steps and

probability of reaching node i during the random walk.

Similarly, we start a random walk from node u, and obtain the vector of
probabilities p_u[i]. Now the similarity between u and v is computed as
the similarity between these two vectors. To compute the vector similarity,
this is the suggested function in their paper.

sim(u,v) = e^(2k- sum(abs(p_v[i] - p_u[i]))) - 1

