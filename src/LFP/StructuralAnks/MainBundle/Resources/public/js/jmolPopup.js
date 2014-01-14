/* 
 * Author: Felipe Rodriguez
 * Script that opens a popup to show the pdb info
 * 
 */

function popitup(url) {
        newwindow=window.open(url,'name','height=400,width=500');
        if (window.focus) {newwindow.focus()}
        return false;
}
