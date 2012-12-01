/* Palindrome Test
 * by Roberto Tatasciore
 */

public class Palindrome {

    static boolean isPalindrome(String str) {
        int len = str.length(); // length of str
        // loop will run until half of str is reached
        for (int i = 0; i < len / 2; i++)
            /* if first char != last char
             * if second char != second to last char
             * and so on
             */
            if (str.charAt(i) != str.charAt((len - i) - 1)) return false;
        return true;
    }
    
}
