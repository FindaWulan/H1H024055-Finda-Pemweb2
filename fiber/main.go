package main

import (
	"log"

	"github.com/gofiber/fiber/v3"
)

func main() {
	app := fiber.New()

	app.Get("/", func(c fiber.Ctx) error {
		return c.SendString("Halo Pemrograman Web II")
	})

	app.Get("/api/mahasiswa", func(c fiber.Ctx) error {
		return c.JSON(fiber.Map{
			"nim":           "H1H024055",
			"nama":          "FINDA WULAN FEBRIANTI",
			"program_studi": "Teknik Komputer",
		})
	})

	log.Fatal(app.Listen(":3000"))
}