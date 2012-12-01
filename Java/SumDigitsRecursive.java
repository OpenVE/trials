/* Sum digits recursively
 * by Roberto Tatasciore
 */

public class SumDigitsRecursive {
    
    static int sum(int number) {
        if (number / 10 == 0) return number; // if last digit, return
        return (number % 10) + sum(number / 10); // return last digit + sum of remaining digits
    }
    
}
