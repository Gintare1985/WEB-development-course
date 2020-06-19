var colorTitle = 'red';
var colorParagraph = 'blue';
var title = 'Skyrius1';
var article = 'Magna ita offendit, anim quibusdam philosophari, an quid praetermissum nam nisi 		despicationes nescius elit commodo. Ita et distinguantur de id pariatur id laborum, ubi enim probant proident ad duis aut pariatur, sunt iudicem		concursionibus nam fore ab voluptate do nulla consectetur voluptate elit		aliquip, legam ad admodum et quid. Quae probant an commodo, litteris de summis 		ullamco. Est legam nostrud arbitrantur ex si a culpa fore quorum est an amet 		quis est aliquip, enim incididunt quo praetermissum. Eu pariatur ab fabulas. Minim nescius cohaerescant, qui quorum eram de singulis.';
var outputTitle;
var outputArticle;
var symbolNr;


outputTitle = '<h1 style="color: ' + colorTitle + ';">' + title + '</h1>';
outputArticle = '<p style="color: ' + colorParagraph + ';">' + article + '</p>';
output = outputTitle + '<br>' + outputArticle;
symbolNr = article.length;



document.write(output);
document.getElementById('symbol-amount').innerHTML = 'Tekste yra ' + symbolNr + ' simbolių';
