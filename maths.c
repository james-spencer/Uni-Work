#include <stdio.h>

int main()
{
        int x, y, a, b, c, d, in1, in2, in3, in4, in5, avg, count;
        
        printf("Please enter a min of 1 no. and max of 5 no. to find the average of\n");
        scanf("%i %i %i %i %i", &in1, &in2, &in3, &in4, &in5);
        
        avg = (in1 + in2 + in3 + in4 + in5) / 5;
        
        //x = 10;
        //y = 5;
        //a = 0;
        //b = 0;
        //c = 0;
        //d = 0;
        //
        //a = x + y;
        //b = x - y;
        //c = x * y;
        //d = x / y;
        //
        //printf("%i\n", a);
        //printf("%i\n", b);
        //printf("%i\n", c);
        //printf("%i\n", d);
        
        printf("Avg = %i\n", avg);
        
        return 0;
}
