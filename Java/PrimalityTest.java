/* Primality Test
 * by Roberto Tatasciore
 */

public class PrimalityTest {
    
    static boolean isPrime(int number) {
        if (number == 2) return true;
        if (number % 2 == 0 || number == 1) return false; // if even or 1
        long limit = (long) Math.sqrt(number); // square root
        /* start from 3 and increment by 2 because there's no need
         * to test even divisors of an odd number
         */
        for (int i = 3; i <= limit; i += 2)
            if (number % i == 0) return false;
        return true;
    }
    
}