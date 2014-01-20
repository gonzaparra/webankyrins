//www.lsauer.com 2012 CC-BY-SA 3
//description: Sequence Viewer in one line of JavaScript code
//most concise implementation; requires rule-attribute-based css styles e.g. 'b[c=I]{color: red;}'
//see: http://www.lsauer.com/2012/05/sequence-viewer-fasta-to-gff.html
seq.split(/(.{10})/g).filter(Boolean).map(function(e,i){return(i%6?'':'\n'+'    '.slice(-2+(''+i*10+1).length)+(i*10+1)+' ')+e.replace(/(.{1})/g,'<b c="\$1">\$1</b>')}).join(' ')