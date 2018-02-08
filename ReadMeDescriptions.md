# Assignment

## Must-to-have


- Describe the Quick Sort algorithm.
    
  Quick sort algorithm picks an number from unsorted number set. And accept this value as a pivot. After that compare 
  each value with the pivot value. If values bigger than pivot these are added right side the pivot.If values smaller
  than pivot added left side the pivot. After that this process repeated for right side and left side. The process is
  continue when there few than 2 number for each data set. 
   

- Apply PHPDoc to decribe the code. *
I will write when coding is finished.


* Share websites, URLs, documentations, books, etc. which you use during investigating related topic.
https://hub.docker.com/_/php/
https://www.geeksforgeeks.org/quick-sort/
http://bilgisayarkavramlari.sadievrenseker.com/2008/08/09/hizli-siralama-algoritmasi-quick-sort-algorithm/
http://www.php-fig.org/psr/psr-2/
https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_tags.return.pkg.html





# docker run -it --rm --name quicksort -v "$PWD":/Users/trkarasu/Projects/mentorship -w /Users/trkarasu/Projects/mentorship php:7.0-cli php test.php