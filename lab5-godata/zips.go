package main 

import (
	"fmt"
	"os"
	"log"
	"encoding/csv"
	"io"
)

type ZipRecords struct {
	TotalRecords int
	RecordsPerDistrict int
	Population int
}
func main() {
	file, err := os.Open("./zip_code_database.csv")
	if err != nil {
		log.Fatal(err)
	}
	r := csv.NewReader(file)
	for {
		record, err := r.Read()
		if err == io.EOF {
			break
		}
		if err != nil {
			log.Fatal(err)
		}
		fmt.Println(record[0], record[1], record[14])
	}
	file.Close()
}