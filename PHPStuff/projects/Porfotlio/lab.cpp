#include <iostream>
#include <ctype.h>

using namespace std;

struct node{
    int num;
    node* next;
};

struct stackhead{
    int count;
    node* top;
};

int main(){
    stackhead *head;
    node* newPtr;
    node* dltPtr;
    node* temp;

    char answer;

    head = new stackhead;
    head->count = 0;
    head->top = NULL;

    do{
        newPtr = new node;
        cout << "\nEnter an integer number: ";
        cin >> newPtr->num;
        newPtr->next = NULL;

        if (head->top != NULL){
            newPtr->next = head->top;
        }
        head->top = newPtr;
        head->count++;

        cout<<"\nContinue add new item? Press Y for Yes or any key for No: ";
        cin >> answer;
    }while (toupper(answer) == 'Y');

    cout << "\n\n";
    temp = head->top;
    while (temp != NULL){
        cout << temp->num << endl;
        temp = temp->next;
    }
    return 0;
}
