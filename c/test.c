#include <stdio.h>

struct Student
{
    char name[25];
    int rollNumber;
    float marks;
};

int main()
{

    struct Student students[2]; // Array to store details of 25 students
    int studentIndex;           // Loop variable
    int lowestMarkIndex = 0;    // Index of student with lowest marks

    // Input details of 25 students
    for (studentIndex = 0; studentIndex < 2; studentIndex++)
    {
        printf("\nEnter details of Student %d\n", studentIndex + 1);

        printf("Name: ");
        scanf("%s", students[studentIndex].name);

        printf("Roll Number: ");
        scanf("%d", &students[studentIndex].rollNumber);

        printf("Marks: ");
        scanf("%f", &students[studentIndex].marks);
    }

    // Assume first student has lowest marks
    float lowestMarks = students[0].marks;

    // Find student with lowest marks
    for (studentIndex = 1; studentIndex < 2; studentIndex++)
    {
        if (students[studentIndex].marks < lowestMarks)
        {
            lowestMarks = students[studentIndex].marks;
            lowestMarkIndex = studentIndex;
        }
    }

    // Print details of student with lowest marks
    printf("\nStudent with Lowest Marks:\n");
    printf("Name: %s\n", students[lowestMarkIndex].name);
    printf("Roll Number: %d\n", students[lowestMarkIndex].rollNumber);
    printf("Marks: %.2f\n", students[lowestMarkIndex].marks);

    return 0;
}